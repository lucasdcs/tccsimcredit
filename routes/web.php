<?php

use App\Http\Controllers\AnaliseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacoesController;

Route::get('/', [OperacoesController::class, 'index'])->name('ListarOperacoes');
Route::get('/create', [OperacoesController::class, 'create'])->name('operacoes.create');
Route::post('/create', [OperacoesController::class, 'store'])->name('operacoes.store');
Route::delete('/operacoes/{id}', [OperacoesController::class, 'destroy'])->name('operacoes.destroy');

Route::get('/operacoes/{id}/analise', [AnaliseController::class, 'show'])->name('operacao.analise');

