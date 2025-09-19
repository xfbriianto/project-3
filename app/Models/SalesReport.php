<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalesReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'total',
        'status',
        'transaction_date',
        'barang_list',
    ];

    protected $casts = [
        'transaction_date' => 'datetime',
    ];

    /**
     * Relasi ke User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'User Tidak Ditemukan',
        ]);
    }

    /**
     * Relasi ke Order
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    /**
     * Relasi ke OrderItem (untuk detail laporan)
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }

    /**
     * Accessor: Mendapatkan daftar barang (nama + qty) dari order items
     */
    public function getBarangListAttribute()
    {
        if (!empty($this->attributes['barang_list'])) {
            return $this->attributes['barang_list'];
        }

        if (!$this->relationLoaded('orderItems') || $this->orderItems->isEmpty()) {
            return 'Barang tidak tersedia';
        }

        return $this->orderItems->map(function ($item) {
            $barangName = $item->barang ? $item->barang->nama : 'Barang tidak ditemukan';
            return $barangName . ' (x' . $item->quantity . ')';
        })->implode(', ');
    }

    /**
     * Method alternatif untuk mendapatkan barang list
     */
    public function getFormattedBarangList()
    {
        if (!empty($this->barang_list)) {
            return $this->barang_list;
        }

        if ($this->orderItems->isEmpty()) {
            return 'Barang tidak tersedia';
        }

        return $this->orderItems->map(function ($item) {
            $barangName = $item->barang ? $item->barang->nama : 'Barang tidak ditemukan';
            return $barangName . ' (x' . $item->quantity . ')';
        })->implode(', ');
    }
}