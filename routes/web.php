<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('frontend.index');
Route::get('/cart', [App\Http\Controllers\Frontend\FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('/checkout', [App\Http\Controllers\Frontend\FrontendController::class, 'checkout'])->name('frontend.checkout');
Route::get('/detail', [App\Http\Controllers\Frontend\FrontendController::class, 'detail'])->name('frontend.detail');
Route::get('/shop', [App\Http\Controllers\Frontend\FrontendController::class, 'shop'])->name('frontend.shop');


Route::get('/admin/login', [App\Http\Controllers\Backend\BackendController::class, 'login'])->name('backend.login');
Route::get('/admin/index', [App\Http\Controllers\Backend\BackendController::class, 'index'])->name('backend.index');
Route::get('/admin/forgot-password', [App\Http\Controllers\Backend\BackendController::class, 'forgot_password'])->name('backend.forgot_password');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
