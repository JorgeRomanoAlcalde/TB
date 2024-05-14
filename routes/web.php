<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//INDEX
Route::view('/','index')->name('inicio');

//REGISTRO
Route::view('/login', "login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/menu', "menu")/*->middleware('auth')*/->name('menu');

//ALIDACIONES,INICIO DE SESIÓN Y CIERRE DE SESIÓN
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//LOCAL
Route::get('/local', [LocalController::class,'index'])->name('local.index');

//PRODUCT
Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::view('/login/add', "product.form")->name('productForm');
Route::get('product', [ProductController::class,'store'])->name('product.store');
Route::patch('product/{product}', 'ProductController@update')->name('product.update');
Route::get('product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::delete('product/{product}', [ProductController::class,'destroy'])->name('product.destroy');

//WAREHOUSE
Route::get('/warehouse', [WarehouseController::class,'index'])->name('warehouse.index');

//USER
Route::get('/user', [UserController::class,'index'])->name('user.index');