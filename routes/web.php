<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
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
Auth::routes();
Route::resource('/home', HomeController::class)->middleware('role');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin/login');
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::put('/admin/status/{admin}', [AdminController::class, 'status']);
Route::put('/admin/password/{id}', [AdminController::class, 'update_password']);
Route::get('/', function () {
    return redirect('/home');
});


Route::resource('/mail', MailController::class);
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('shipping');
Route::get('/ordernow', [HomeController::class, 'orderNow'])->name('ordernow');
