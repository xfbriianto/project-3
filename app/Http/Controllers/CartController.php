<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\Barang;

class CartController extends Controller
{
    /**
     * Proses tambah ke keranjang.
     */
    public function addToCart(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Validasi input
        $request->validate([
            'barang_id' => 'nullable|exists:barangs,id',
            'paket_id'  => 'nullable|exists:pakets,id',
        ]);

        // Jika paket_id diisi, tambahkan CartItem dengan paket_id saja
        if ($request->filled('paket_id')) {
            $paketId = $request->input('paket_id');
            $cartItem = CartItem::where('user_id', $user->id)
                ->where('paket_id', $paketId)
                ->whereNull('barang_id')
                ->first();
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                CartItem::create([
                    'user_id'  => $user->id,
                    'paket_id' => $paketId,
                    'quantity' => 1,
                ]);
            }
            return redirect()->back()->with('success', 'Paket berhasil ditambahkan ke keranjang.');
        }

        // Jika barang_id diisi, tambahkan CartItem dengan barang_id saja
        if ($request->filled('barang_id')) {
            $barangId = $request->input('barang_id');
            $cartItem = CartItem::where('user_id', $user->id)
                ->where('barang_id', $barangId)
                ->whereNull('paket_id')
                ->first();
            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->save();
            } else {
                CartItem::create([
                    'user_id'   => $user->id,
                    'barang_id' => $barangId,
                    'quantity'  => 1,
                ]);
            }
            return redirect()->back()->with('success', 'Barang berhasil ditambahkan ke keranjang.');
        }

        return redirect()->back()->with('error', 'Tidak ada barang atau paket yang dipilih.');
    }

    /**
     * Tampilkan halaman keranjang.
     */
    public function index()
    {
        if (!Auth::check()) {
            // Jika belum login, tampilkan view dengan koleksi kosong
            return view('keranjang', [
                'cartItems' => collect(),
                'subtotal'  => 0,
                'shipping'  => 0,
                'tax'       => 0,
                'total'     => 0,
            ]);
        }

        // Ambil semua CartItem untuk user yang sedang login, beserta relasi barang dan paket (beserta items pada paket)
        $cartItems = CartItem::with(['barang', 'paket.items'])
            ->where('user_id', Auth::id())
            ->get();

        // Hitung subtotal (harga * quantity)
        $subtotal = $cartItems->sum(function ($item) {
            if ($item->paket_id && $item->paket) {
                return $item->paket->price * $item->quantity;
            } elseif ($item->barang_id && $item->barang) {
                return $item->barang->price * $item->quantity;
            }
            return 0;
        });

        // Contoh: biaya shipping tetap atau bisa diubah sesuai logika bisnis
        $shipping = ($subtotal > 0) ? 10 : 0;
        $tax = $subtotal * 0.1; // misalnya 10% pajak
        $total = $subtotal + $shipping + $tax;

        return view('keranjang.index', compact('cartItems', 'subtotal', 'shipping', 'tax', 'total'));
    }

    /**
     * Proses update quantity (increment / decrement).
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::id();
        $cartItem = CartItem::findOrFail($id);

        // Pastikan item milik user ini
        if ($cartItem->user_id !== $userId) {
            abort(403, 'Akses ditolak.');
        }

        if ($request->has('increment')) {
            $cartItem->quantity += 1;
        } elseif ($request->has('decrement')) {
            $cartItem->quantity = max(1, $cartItem->quantity - 1);
        }

        $cartItem->save();
        return back();
    }

    /**
     * Proses hapus item dari keranjang.
     */
    public function remove($id)
    {
        $userId = Auth::id();
        $cartItem = CartItem::findOrFail($id);

        // Pastikan item milik user ini
        if ($cartItem->user_id !== $userId) {
            abort(403, 'Akses ditolak.');
        }

        $cartItem->delete();
        return back();
    }
}
