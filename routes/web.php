<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::resource('/home', HomeController::class);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('shipping');
Route::get('/ordernow', [HomeController::class, 'orderNow'])->name('ordernow');
