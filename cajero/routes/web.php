<?php

use  App\Http\Middleware\XssSanitization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\URL;

// URL::forceScheme('https');

Route::get('/', function () {
    return view('home.index');
})->name('home');


// Definimos todas las rutas para realizar el CRUD
Route::resource('pais', PaisController::class)->middleware(XssSanitization::class);
Route::resource('departamento', DepartamentoController::class)->middleware(XssSanitization::class);
