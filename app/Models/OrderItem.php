<?php

// Model OrderItem yang diperbaiki
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'barang_id',
        'quantity',
        'price',
    ];

    // Pastikan nama tabel benar (jika tidak menggunakan konvensi)
    // protected $table = 'order_items';

    // Relasi ke barang - pastikan foreign key dan local key benar
    public function barang(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Barang::class, 'barang_id', 'id');
    }

    // Relasi ke order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}


