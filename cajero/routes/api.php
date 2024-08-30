<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaisController;
use App\Http\Controllers\Api\DepartamentosController;
use App\Http\Controllers\api\MunicipioController;
use App\Http\Controllers\api\ClienteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Define la ruta para los end-point
Route::get('pais/{searchText?}', [PaisController::class, 'index']);
Route::get('departamento/{searchText?}', [DepartamentosController::class, 'index']);
Route::get('municipio/{searchText?}', [MunicipioController::class, 'index']);
Route::get('cliente/{searchText?}', [ClienteController::class, 'index']);
