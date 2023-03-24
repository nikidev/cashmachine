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

        return redirect('/transactions/'. $bankTransaction->id);
    }
}
