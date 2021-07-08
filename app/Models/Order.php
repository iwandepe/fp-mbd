<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';

    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'employee_id',
        'order_date',
        'required_date',
        'shipped_date',
        'ship_via',
        'freight',
        'ship_name',
        'ship_address',
        'ship_city',
        'ship_region',
        'ship_postal',
        'ship_country',
    ];

    public function order_details() {
        return $this->hasMany(OrderDetail::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($order) {
            $order->order_details()->delete();
        });
    }
}
