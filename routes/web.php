<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'example'], function () {
   Route::view('dashboard', 'examples.dashboard');
   Route::view('icons', 'examples.icons');
   Route::view('login', 'examples.login');
   Route::view('map', 'examples.map');
   Route::view('maps', 'examples.maps');
   Route::view('profile', 'examples.profile');
   Route::view('register', 'examples.register');
   Route::view('tables', 'examples.tables');
   Route::view('upgrade', 'examples.upgrade');
});

Route::group(['prefix' => '/employee'], function() {
    Route::get('/', [EmployeeController::class, 'index']);
    Route::get('/add', [EmployeeController::class, 'add']);
    Route::get('/{id}/edit', [EmployeeController::class, 'edit']);
    Route::put('/{id}', [EmployeeController::class, 'update']);
    Route::post('/', [EmployeeController::class, 'store']);
    Route::delete('/{id}', [EmployeeController::class, 'destroy']);
});

Route::group(['prefix' => '/order'], function() {
    Route::get('/', [OrderController::class, 'index']);
    Route::get('/add', [OrderController::class, 'add']);
    Route::get('/{id}/edit', [OrderController::class, 'edit']);
    Route::put('/{id}', [OrderController::class, 'update']);
    Route::post('/', [OrderController::class, 'store']);
    Route::delete('/{id}', [OrderController::class, 'destroy']);
});
