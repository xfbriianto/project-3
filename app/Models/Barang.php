<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    
    protected $fillable = [
        'name', 
        'category', 
        'stock', 
        'price', 
        'description', 
        'image'
    ];    

    /**
     * Relasi ke paket
     */
    public function pakets(): BelongsToMany
    {
        return $this->belongsToMany(Paket::class, 'barang_paket', 'barang_id', 'paket_id');
    }

    /**
     * Relasi ke order items
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'barang_id', 'id');
    }

    /**
     * Scope untuk search
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'LIKE', "%{$keyword}%")
                     ->orWhere('description', 'LIKE', "%{$keyword}%");
    }
}