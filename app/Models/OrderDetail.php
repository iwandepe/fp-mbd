<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Builder;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    //protected $primaryKey = ['order_id', 'product_id'];
    public $timestamps = false;
    protected $fillable = [
        'order_id', 
        'product_id',
        'unit_price', 
        'quantity', 
        'discount'
    ];
}
