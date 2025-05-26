<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'User Tidak Ditemukan'
        ]);
    }
    

    // Relasi ke item pesanan
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}