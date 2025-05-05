<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Barang; // Pastikan untuk mengimpor model Barang jika diperlukan

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'barang_id',
        'quantity',
        'price',
        // tambahkan kolom lain sesuai kebutuhan tabel order_items
    ];

    // Relasi ke order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi ke barang
    public function barang()
{
    return $this->belongsTo(\App\Models\Barang::class, 'barang_id');
}
}