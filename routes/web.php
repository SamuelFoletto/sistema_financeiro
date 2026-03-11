<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('conta', App\Http\Controllers\ContaController::class);
Route::resource('categoria',App\Http\Controllers\CategoriaController::class);
Route::resource('tipos_pagamentos', App\Http\Controllers\TiposPagamentosController::class);
Route::resource('tipos_cobrancas', App\Http\Controllers\TiposCobrancasController::class);
