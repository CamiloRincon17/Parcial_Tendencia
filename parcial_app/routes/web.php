<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CalculadoraController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/calculadora', [CalculadoraController::class, 'index']);
Route::post('/calculadora', [CalculadoraController::class, 'calcular']);
