<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'order_code'
    ];

    // Order → banyak item
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Order → milik user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
