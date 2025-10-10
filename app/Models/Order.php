<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'total',
        'status',
        'full_name',
        'email',
        'phone',
        'address_street',
        'address_city',
        'address_province',
        'address_postal_code',
        'shipping_method',
        'address_notes',
    ];

    // Relasi ke user (pelanggan)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'User Tidak Ditemukan'
        ]);
    }

    // Relasi ke item pesanan
    public function items(): HasMany
{
    return $this->hasMany(OrderItem::class, 'order_id');
}
}