<?php

namespace App\Http\Controllers;

use App\Models\MoneyTransaction;
use Illuminate\View\View;

class MoneyTransactionController extends Controller
{
    public function show(int $id): View
    {
       $moneyTransaction = MoneyTransaction::findOrFail($id);

       return view('moneytransactions.show', ['moneyTransaction' => $moneyTransaction]);
    }
}
