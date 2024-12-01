<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('clientes', [ClientesController::class, 'index']);
Route::get('clientes/{id}', [ClientesController::class, 'show']);
Route::post('clientes', [ClientesController::class, 'store']);
Route::put('clientes/{id}', [ClientesController::class, 'update']);
Route::delete('clientes/{id}', [ClientesController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

