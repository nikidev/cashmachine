<?php

namespace App\Http\Controllers;

use App\Factories\CashTransaction;
use App\Http\Requests\CashTransactionRequest;
use App\Services\CashMachineService;

class CashTransactionController extends Controller
{
    public function store(CashTransactionRequest $request, CashMachineService $service)
    {
        $cashTransaction = $service->store(CashTransaction::class, $request);

        return redirect('/transactions/'. $cashTransaction->id);
    }
}
