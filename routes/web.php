<?php

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

Route::post('transactions', [MoneyTransactionController::class, 'store'])->name('transactions.store');
Route::get('transactions/{id}', [MoneyTransactionController::class, 'show'])->name('transactions.show');
