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


// Define todas las rutas CRUD para el controlador PaisController
// Route::resource('paises', PaisController::class);

Route::resource('paises', PaisController::class)->middleware(XssSanitization::class);
Route::resource('departamento', DepartamentoController::class)->middleware(XssSanitization::class);
