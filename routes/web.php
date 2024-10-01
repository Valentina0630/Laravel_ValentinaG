<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClientesController::class, 'control']);

Route::get('/clientes/{id}', [ClientesController::class, 'cedula']);


