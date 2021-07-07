<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'employee_id';

    public $timestamps = false;

    protected $fillable = [
        'last_name',
        'first_name',
        'title',
        'title_of_courtesy',
        'birth_date',
        'hire_date',
        'address',
        'city',
        'region',
        'postal_code',
        'country',
        'home_phone',
        'extension',
        'photo',
        'notes',
        'reports_to',
        'photo_path'
    ];

    public function orders() {
        return $this->hasMany('orders');
    }

    public function employee_territories() {
        return $this->hasMany('employee_territories');
    }

    public function employees() {
        return $this->hasMany('employees');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($employee) {
            $employee->orders()->delete();
            $employee->employee_territories()->delete();
            $employee->employees()->delete();
        });
    }
}
