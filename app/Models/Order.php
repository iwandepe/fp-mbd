<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
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
}
