<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Tampilkan detail order.
     */
    public function show($id)
{
    $order = Order::with(['user', 'items.barang'])->findOrFail($id);
    return view('admin.orders.show', compact('order'));
}
}