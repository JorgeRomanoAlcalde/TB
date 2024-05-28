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

//INFO
Route::view('/cookies', "info.cookies")->name('cookies');
Route::view('/privacidad', "info.privacidad")->name('privacidad');

//VALIDACIONES,INICIO DE SESIÓN Y CIERRE DE SESIÓN
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//LOCAL
Route::get('/local', [LocalController::class,'index'])->name('local.index');

//PRODUCT
Route::get('/addProductos', [ProductController::class,'viewAdd'])->name('add.productos');
Route::get('/allProductos', [ProductController::class,'index'])->name('all.productos');


Route::delete('product/{product}', [ProductController::class,'destroy'])->name('product.destroy');

//WAREHOUSE
Route::get('/warehouse', [WarehouseController::class,'index'])->name('all.warehouse');
Route::get('/addWarehouse', [WarehouseController::class,'viewAdd'])->name('add.warehouse');

//USER
Route::get('/users', [UserController::class,'index'])->name('all.users');
Route::get('/addUsers', [UserController::class,'viewAdd'])->name('add.users');