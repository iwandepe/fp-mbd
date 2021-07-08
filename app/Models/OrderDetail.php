<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $primaryKey = ['order_id', 'product_id'];

    protected $fillable = [
        'order_id', 
        'product_id', 
        'unit_price', 
        'quantity', 
        'discount',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
