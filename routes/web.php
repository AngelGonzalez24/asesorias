<?php

use App\Http\Controllers\AsesorController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ojo
Route::resource('asignaturas', AsignaturaController::class);

Route::resource('/materiales', MaterialController::class );

Route::resource('/asesores', AsesorController::class );
