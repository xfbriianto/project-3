<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\SalesReport;

class PaymentController extends Controller
{
    /**
     * Membuat transaksi pembayaran dan mengirim Snap Token ke frontend.
     */
    public function createTransaction(Request $request)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

        $cartItems = CartItem::with('barang')
            ->where('user_id', Auth::id())
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['error' => 'Keranjang Anda kosong'], 400);
        }

        $subtotal = $cartItems->sum(function ($item) {
            return $item->barang->price * $item->quantity;
        });

        $total = $subtotal;

        // Buat order_id unik
        $orderId = 'ORD' . time() . Auth::id();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone ?? '08123456789',
            ],
            'item_details' => $cartItems->map(function ($item) {
                return [
                    'id' => $item->barang->id,
                    'price' => $item->barang->price,
                    'quantity' => $item->quantity,
                    'name' => $item->barang->name,
                ];
            })->toArray(),
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            // Simpan data ke sales_reports dengan status pending, hindari duplikasi order_id
            SalesReport::updateOrCreate(
                ['order_id' => $orderId],
                [
                    'user_id' => Auth::id(),
                    'total' => $total,
                    'status' => 'pending',
                    'transaction_date' => now(),
                ]
            );

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal memproses pembayaran: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Callback dari Midtrans untuk update status pembayaran.
     */
    public function handleCallback(Request $request)
    {
        $notification = new \Midtrans\Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        $salesReport = SalesReport::where('order_id', $orderId)->first();

        if ($salesReport) {
            if (in_array($transactionStatus, ['settlement', 'capture'])) {
                $salesReport->update([
                    'status' => 'completed',
                    'transaction_date' => now(),
                ]);
            } elseif ($transactionStatus == 'pending') {
                $salesReport->update(['status' => 'pending']);
            } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
                $salesReport->update(['status' => 'cancelled']);
            }
        } else {
            // Jika belum ada, buat data baru (antisipasi jika callback datang sebelum insert)
            SalesReport::create([
                'order_id' => $orderId,
                'user_id' => null,
                'total' => 0,
                'status' => $transactionStatus == 'pending' ? 'pending' : ($transactionStatus == 'settlement' || $transactionStatus == 'capture' ? 'completed' : 'cancelled'),
                'transaction_date' => now(),
            ]);
        }

        return response()->json(['message' => 'Callback processed']);
    }
}