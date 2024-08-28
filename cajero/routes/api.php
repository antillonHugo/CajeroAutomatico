<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaisController;
use App\Http\Controllers\Api\DepartamentosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Define la ruta para los end-point
Route::get('pais/{searchText?}', [PaisController::class, 'index']);
Route::get('departamento/{searchText?}', [DepartamentosController::class, 'index']);
