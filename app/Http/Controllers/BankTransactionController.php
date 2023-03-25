<?php

namespace App\Http\Controllers;

use App\Factories\BankTransaction;
use App\Http\Requests\BankTransactionRequest;
use App\Services\CashMachineService;

class BankTransactionController extends Controller
{
    public function store(BankTransactionRequest $request, CashMachineService $service)
    {
        $bankTransaction = $service->store(BankTransaction::class, $request);

        if(!$bankTransaction) {
            return redirect()->back()->withErrors([
                'error-limit-total-processing' => 'The limit for total processing of transactions is reached !'
            ]);
        }

        return redirect('/transactions/'. $bankTransaction->id);
    }
}
