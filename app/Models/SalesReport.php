<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    protected $table = 'sales_reports';

    protected $fillable = [
        'order_id',
        'user_id',
        'total',
        'status',
        'transaction_date',
    ];

    // Relasi ke user (jika ingin)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}