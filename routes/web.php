<?php

use App\Http\Controllers\CashMachineController;
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
});

Route::post('transactions', [CashMachineController::class, 'store'])->name('transactions.store');
Route::get('transactions/{id}', [CashMachineController::class, 'show'])->name('transactions.show');
