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

        if(!$cardTransaction) {
            return redirect()->back()->withErrors([
                'error-limit-total-processing' => 'The limit for total processing of transactions is reached !'
            ]);
        }

        return redirect('/transactions/'. $cardTransaction->id);
    }
}
