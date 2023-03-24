<?php

namespace App\Http\Controllers;

use App\Factories\CardTransaction;
use App\Http\Requests\CardTransactionRequest;
use App\Services\CashMachineService;

class CardTransactionController extends Controller
{
    public function store(CardTransactionRequest $request, CashMachineService $service)
    {
        $cardTransaction = $service->store(CardTransaction::class, $request);

        return redirect('/transactions/'. $cardTransaction->id);
    }
}
