<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    protected $table = 'carts'; // pastikan sudah benar

    protected $fillable = [
        'user_id',
        'barang_id',
        'quantity',
    ];

    // Relasi ke tabel barang (misalnya model Barang)
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
