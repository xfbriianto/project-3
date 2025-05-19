<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Paket extends Model
{
    protected $fillable = ['name', 'price'];

    /**
     * Relasi many-to-many antara Paket dan Barang,
     * menggunakan tabel pivot 'barang_paket'
     */
    public function items()
    {
        return $this->belongsToMany(Barang::class, 'barang_paket', 'paket_id', 'barang_id');
    }
}
