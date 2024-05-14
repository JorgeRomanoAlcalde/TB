<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//INDEX
Route::view('/','index')->name('inicio');

//REGISTRO
Route::view('/login', "login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/menu', "menu")->middleware('auth')->name('menu');

//ALIDACIONES,INICIO DE SESIÓN Y CIERRE DE SESIÓN
Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
