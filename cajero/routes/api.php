<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaisController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Define la ruta para el end-point
Route::get('/pais/{searchText?}', [PaisController::class, 'index']);
