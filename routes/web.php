<?php

use App\Http\Controllers\BankTransactionController;
use App\Http\Controllers\CardTransactionController;
use App\Http\Controllers\CashTransactionController;
use App\Http\Controllers\MoneyTransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('transactions/cash', [CashTransactionController::class, 'store'])->name('transactions.cash.store');
Route::post('transactions/card', [CardTransactionController::class, 'store'])->name('transactions.card.store');
Route::post('transactions/bank', [BankTransactionController::class, 'store'])->name('transactions.bank.store');

Route::get('transactions/{id}', [MoneyTransactionController::class, 'show'])->name('transactions.show');
