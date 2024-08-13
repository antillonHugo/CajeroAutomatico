<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\URL;

// URL::forceScheme('https');

Route::get('/', function () {
    return view('layouts.app');
})->name('home');


// Define todas las rutas CRUD para el controlador PaisController
// Route::resource('paises', PaisController::class);

Route::resource('paises', PaisController::class)->middleware(\App\Http\Middleware\XssSanitization::class);
