<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'barang_id',
        'quantity',
        'paket_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
public function barang()
{
    return $this->belongsTo(Barang::class);
}

public function paket()
{
    return $this->belongsTo(Paket::class, 'paket_id');
}
}
