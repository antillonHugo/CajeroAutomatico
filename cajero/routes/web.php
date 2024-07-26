<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/paises/index', [PaisController::class, 'index'])->name('pais');
