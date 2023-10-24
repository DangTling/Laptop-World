<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Cart;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLoginMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/process_admin_login', [AdminController::class, 'process_login'])->name('admin.process_login');

Route::group([
    'middleware' => 'admin',
], function () {
    Route::get('/admin/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::group(['prefix' => 'companies', 'as' => 'companies.'], function () {
        Route::get('/', [CompaniesController::class, 'index'])->name('index');
        Route::get('/create', [CompaniesController::class, 'create'])->name('create');
        Route::post('/store', [CompaniesController::class, 'store'])->name('store');
        Route::delete('/delete/{companies}', [CompaniesController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{companies}', [CompaniesController::class, 'edit'])->name('edit');
        Route::put('/update/{companies}', [CompaniesController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('/', [ProductsController::class, 'index'])->name('index');
        Route::get('/create', [ProductsController::class, 'create'])->name('create');
        Route::post('/store', [ProductsController::class, 'store'])->name('store');
        Route::delete('/delete/{products}', [ProductsController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{products}', [ProductsController::class, 'edit'])->name('edit');
        Route::put('/update/{products}', [ProductsController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'manage_users'])->name('index');
        Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('destroy');
    });
    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get('/', [OrdersController::class, 'index'])->name('index');
        Route::delete('/delete/{orders}', [OrdersController::class, 'destroy'])->name('destroy');
        Route::get('/accept/{orders}', [OrdersController::class, 'accept'])->name('accept');
        Route::get('/edit/{orders}', [OrdersController::class, 'edit'])->name('edit');
    });
});

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/process_login', [UserController::class, 'process_login'])->name('user.process_login');

Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/process_register', [UserController::class, 'process_register'])->name('user.process_register');

Route::group([
    'middleware' => 'user',
], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/profile/{user}', [UserController::class, 'show'])->name('user.profile');
    Route::get('/product_page/{products}', [UserController::class, 'product_page'])->name('user.product_page');
    Route::get('/add_to_cart/{products}', [Cart::class, 'add_to_cart'])->name('user.add_to_cart');
    Route::get('/show_cart', [Cart::class, 'show'])->name('user.show_cart');
    Route::delete('/remove_from_cart/{products}', [Cart::class, 'remove_from_cart'])->name('user.remove_from_cart');
    Route::post('/update_quantity_cart', [Cart::class, 'updateCartQuantity'])->name('user.update_cart_quantity');
    Route::get('/pay_order', [UserController::class, 'pay_order'])->name('user.pay');
    Route::post('/check_out', [UserController::class, 'check_out'])->name('user.check_out');
});
