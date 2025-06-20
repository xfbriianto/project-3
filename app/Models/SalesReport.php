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

    // Hapus appends karena kita akan menggunakan accessor langsung
    // protected $appends = ['barang_list'];

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
     * Accessor: Mendapatkan daftar barang (nama + qty) dari order items
     * PERBAIKAN: Tambahkan pengecekan yang lebih robust
     */
    public function getBarangListAttribute()
    {
        // Jika sudah ada barang_list di database, gunakan itu
        if (!empty($this->attributes['barang_list'])) {
            return $this->attributes['barang_list'];
        }

        // Jika tidak ada relasi order atau order tidak ada, return default
        if (!$this->relationLoaded('order') || !$this->order) {
            return 'Barang tidak tersedia';
        }

        // Jika order items tidak ada, return default
        if (!$this->order->relationLoaded('items') || $this->order->items->isEmpty()) {
            return 'Barang tidak tersedia';
        }

        // Generate barang list dari order items
        return $this->order->items->map(function ($item) {
            $barangName = $item->barang ? $item->barang->name : 'Barang tidak ditemukan';
            return $barangName . ' (x' . $item->quantity . ')';
        })->implode(', ');
    }

    /**
     * Method alternatif untuk mendapatkan barang list
     * Bisa dipanggil langsung dari view jika accessor tidak bekerja
     */
    public function getFormattedBarangList()
    {
        if (!empty($this->barang_list)) {
            return $this->barang_list;
        }

        if (!$this->order || !$this->order->items) {
            return 'Barang tidak tersedia';
        }

        return $this->order->items->map(function ($item) {
            $barangName = $item->barang ? $item->barang->name : 'Barang tidak ditemukan';
            return $barangName . ' (x' . $item->quantity . ')';
        })->implode(', ');
    }
}