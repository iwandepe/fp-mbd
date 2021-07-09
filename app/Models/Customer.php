<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'company_name',
        'contact_name',
        'contact_title',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'phone',
        'fax'
    ];
    public $timestamps = false;
    protected $primaryKey = 'customer_id';
    public $incrementing = false;

}
