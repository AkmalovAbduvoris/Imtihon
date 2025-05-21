<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\BalanceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/balance', [BalanceController::class, 'index'])->name('api.balance.index');
Route::post('/balance', [BalanceController::class, 'store'])->name('api.balance.store');

Route::get('/transactions', [TransactionController::class, 'index'])->name('api.transactions.index');
Route::post('/transactions', [TransactionController::class, 'store'])->name('api.transactions.store');
