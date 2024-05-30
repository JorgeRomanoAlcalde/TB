<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidosController;
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
Route::get('/allProductos', [ProductController::class,'index'])->name('all.productos');
Route::get('/addProductos', [ProductController::class,'create'])->name('add.productos');
Route::post('product/', [ProductController::class,'store'])->name('store.productos');
Route::post('product/{product}/edit', [ProductController::class,'edit'])->name('edit.productos');
Route::patch('product/{product?}', [ProductController::class,'update'])->name('update.productos');
Route::delete('product/{product}', [ProductController::class,'destroy'])->name('product.destroy');

//WAREHOUSE
Route::get('/warehouse', [WarehouseController::class,'index'])->name('all.warehouse');
Route::get('/addWarehouse', [WarehouseController::class,'viewAdd'])->name('add.warehouse');
Route::post('warehouse/', [WarehouseController::class,'store'])->name('store.warehouse');
Route::post('warehouse/{warehouse}/edit', [WarehouseController::class,'edit'])->name('edit.warehouse');
Route::patch('warehouse/{warehouse?}', [WarehouseController::class,'update'])->name('update.warehouse');
Route::delete('warehouse/{warehouse}', [WarehouseController::class,'destroy'])->name('destroy.warehouse');

//USER
Route::get('/users', [UserController::class,'index'])->name('all.users');
Route::get('/addUsers', [UserController::class,'create'])->name('add.users');
Route::post('users/', [UserController::class,'store'])->name('store.users');
Route::post('users/{user}/edit', [UserController::class,'edit'])->name('edit.users');
Route::patch('users/{user?}', [UserController::class,'update'])->name('update.users');
Route::delete('users/{user}', [UserController::class,'destroy'])->name('destroy.users');

//PERFIL DE USUARIO
Route::view('userProfile','user')->name('perfil');

//PEDIDOS
Route::get('Order',[PedidosController::class,'index'])->name('pedidos');
Route::post('Order/{id}', [PedidosController::class,'add'])->name('add.pedidos');