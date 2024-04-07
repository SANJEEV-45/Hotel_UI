<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[AuthController::class,'login'])->name('logout');
Route::view('/login','auth.login')->name('auth-login');
Route::view('/register','auth.register')->name('auth-register');

Route::post('/registration',[AuthController::class,'registration'])->name("User-registration");
Route::post('/loggingIn',[AuthController::class,'validation'])->name("login-validation");

Route::middleware('Auth-check')->group(function(){
    Route::view('/dashboard','products.index')->name('dashboard');
    Route::get('/category/{category_id}',[ProductController::class,'menu'])->name('product.category');
    Route::get('/product/{product_id}',[ProductController::class,'view'])->name('product.view');
});

Route::view('/welcome','welcome')->name('welcome');
