<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected $fillable = [
        'nama', 'harga', 'kategori', 'gambar', 'deskripsi'
    ];
}
