<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Content;

// Make sure the Feature model exists and is correctly imported
use App\Models\Feature;

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

    public function index()
    {
        $pakets = Paket::all(); // Fetch all packages
        return view('paket.index', compact('pakets'));
    }

}
