<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//INDEX
Route::view('/','index')->name('inicio');

//REGISTRO
Route::view('/login', "login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/menu', "dashboard")->middleware('auth')->name('menu');

//ALIDACIONES,INICIO DE SESIÓN Y CIERRE DE SESIÓN
Route::view('/validar-registro', [LoginController:: class, 'register'])->name('validar-registro');
Route::view('/inicia-sesion', [LoginController:: class, 'login'])->name('inicia-sesion');
Route::view('/logout', [LoginController:: class, 'logout'])->name('logout');
