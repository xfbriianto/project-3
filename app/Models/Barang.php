<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    // File app/Models/Barang.php
protected $fillable = [
    'name', 
    'category', 
    'stock', 
    'price', 
    'description', 
    'image' // <- Pastikan ada
];    

    public function pakets()
{
    return $this->belongsToMany(Paket::class, 'barang_paket', 'barang_id', 'paket_id');
}


    public function items()
    {
        return $this->belongsToMany(Paket::class, 'barang_paket', 'barang_id', 'paket_id');
    }
}
