<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\SalesReport;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total semua stok barang
        $totalStok = Barang::sum('stock');

        // Total penjualan dari orders yang completed
        $totalPenjualan = Order::where('status', 'completed')->sum('total');

        // Ambil penjualan per bulan dari orders
        $penjualanBulanan = Order::select(
                DB::raw('DATE_FORMAT(created_at, "%b %Y") as bulan'),
                DB::raw('SUM(total) as total')
            )
            ->where('status', 'completed')
            ->where('created_at', '>=', Carbon::now()->subMonths(6)->startOfMonth())
            ->groupBy('bulan')
            ->orderByRaw('MIN(created_at)')
            ->pluck('total', 'bulan')
            ->toArray();

        // Siapkan label dan data grafik
        $labels = [];
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $label = Carbon::now()->subMonths($i)->format('M Y');
            $labels[] = $label;
            $data[] = $penjualanBulanan[$label] ?? 0;
        }

        // SOLUSI BARU: Ambil data dari orders dengan items
        $laporan = $this->getRecentPurchases();

        return view('admin.dashboard', compact(
            'totalStok',
            'totalPenjualan',
            'labels',
            'data',
            'laporan'
        ));
    }

    /**
     * Method untuk mengambil pembelian terbaru dari orders
     */
    private function getRecentPurchases()
    {
        // Ambil orders terbaru dengan relasi user dan items
        $orders = Order::with([
                'user:id,name,email',
                'items:id,order_id,barang_id,quantity,price',
                'items.barang:id,name,price'
            ])
            ->whereHas('items') // Pastikan order memiliki items
            ->latest('created_at')
            ->take(10)
            ->get();

        // Transform data untuk sesuai dengan format yang dibutuhkan view
        return $orders->map(function($order) {
            return (object) [
                'id' => $order->id,
                'order_id' => 'ORD-' . str_pad($order->id, 6, '0', STR_PAD_LEFT),
                'user_name' => $order->user->name ?? 'User tidak ditemukan',
                'user_email' => $order->user->email ?? '',
                'barang_list' => $this->formatBarangList($order->items),
                'total' => $order->total,
                'status' => $order->status,
                'transaction_date' => $order->created_at
            ];
        });
    }

    /**
     * Method untuk format daftar barang
     */
    private function formatBarangList($items)
    {
        if ($items->isEmpty()) {
            return 'Tidak ada barang';
        }

        return $items->map(function($item) {
            $barangName = $item->barang ? $item->barang->name : 'Barang tidak ditemukan';
            return $barangName . ' (x' . $item->quantity . ')';
        })->implode(', ');
    }
}