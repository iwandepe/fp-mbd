<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('employee', [EmployeeController::class, 'index']);
