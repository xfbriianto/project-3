<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'status',
        // tambahkan kolom lain sesuai kebutuhan tabel orders
    ];

    // Relasi ke user (pelanggan)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke item pesanan
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}