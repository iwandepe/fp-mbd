<?php

use App\Http\Controllers\BonusController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\StockController;

Route::get('/', [DashboardController::class, 'index']);

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
    Route::get('/{id}/details', [OrderController::class, 'details']);
    Route::get('/{id}/total', [OrderController::class, 'totalprice']);
    Route::post('/{id}/total', [OrderController::class, 'cekDiscount']);
    Route::put('/{id}', [OrderController::class, 'update']);
    Route::post('/', [OrderController::class, 'store']);
    Route::delete('/{id}', [OrderController::class, 'destroy']);
});

Route::group(['prefix' => '/product'], function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'add']);
    Route::get('/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::post('/', [ProductController::class, 'store']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});

Route::group(['prefix' => '/customer'], function() {
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/add', [CustomerController::class, 'add']);
    Route::get('/{id}/edit', [CustomerController::class, 'edit']);
    Route::put('/{id}', [CustomerController::class, 'update']);
    Route::post('/', [CustomerController::class, 'store']);
    Route::delete('/{id}', [CustomerController::class, 'destroy']);
});

Route::group(['prefix' => '/supplier'], function() {
    Route::get('/', [SupplierController::class, 'index']);
    Route::get('/add', [SupplierController::class, 'add']);
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('/{id}', [SupplierController::class, 'update']);
    Route::post('/', [SupplierController::class, 'store']);
    Route::delete('/{id}', [SupplierController::class, 'destroy']);
});

Route::group(['prefix' => '/order_detail'], function() {
    Route::get('/', [OrderDetailController::class, 'index']);
    Route::get('/add', [OrderDetailController::class, 'add']);
    Route::get('/{order_id}/{product_id}/edit', [OrderDetailController::class, 'edit']);
    Route::put('/{order_id}/{product_id}', [OrderDetailController::class, 'update']);
    Route::post('/', [OrderDetailController::class, 'store']);
    Route::delete('/{order_id}/{product_id}', [OrderDetailController::class, 'destroy']);
});

Route::group(['prefix' => '/sales-history'], function()
{
    Route::get('/', [ReportController::class, 'salesHistory'])->name('sales-history');
    Route::post('/', [ReportController::class, 'salesHistoryPost']);
});

Route::get('/shipper', [ShipperController::class, 'index']);

Route::group(['prefix' => '/bonus'], function()
{
Route::get('/', [BonusController::class, 'totalBonus']);
Route::post('/', [BonusController::class, 'callBonus']);
});

Route::group(['prefix' => '/stock'], function()
{
Route::get('/', [StockController::class, 'index']);
Route::post('/', [StockController::class, 'callStock']);
});