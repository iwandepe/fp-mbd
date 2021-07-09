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

    //protected function setKeysForSaveQuery(Builder $query)
    //{
     //   return $query->where('order_id', $this->getAttribute('order_id'))
     //                ->where('product_id', $this->getAttribute('product_id'));
    //}

    public function order() {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
