<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        // tambahkan kolom lain jika ada
    ];

    // Relasi ke order item
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}