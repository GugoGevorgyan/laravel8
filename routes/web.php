<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\adminDashboardController;

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
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function (){
        Route::put('/status/{admin}', [AdminController::class, 'status'])->name('admin.status');
        Route::put('/password/{id}', [AdminController::class, 'update_password'])->name('admin.update.password');
        Route::put('/product/status/{admin}', [AdminProductController::class, 'status'])->name('admin.prduct.status');
        Route::resource('/category', CategoryController::class);
        Route::resource('/product', AdminProductController::class);
        Route::resource('/adminDashboard', adminDashboardController::class);
    });
    Route::resource('/admin', AdminController::class);
});



Route::get('/', function () {
    return redirect('/home');
});


Route::resource('/mail', MailController::class);
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('shipping');
Route::get('/ordernow/{product}', [HomeController::class, 'orderNow'])->name('ordernow');
Route::get('/prod/{prod}', [HomeController::class, 'prod'])->name('prod');
Route::get('/prod/index/{prod}', [HomeController::class, 'homeProduct'])->name('prod.index');

