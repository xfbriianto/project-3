<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CartItem;


class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
