<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\TransactionController;
use App\Http\Controllers\Web\BalanceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/balance', [BalanceController::class, 'store'])->name('balance.store');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
