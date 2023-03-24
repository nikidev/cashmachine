<?php

namespace App\Services;

use App\Factories\TransactionFactory;
use App\Models\MoneyTransaction;
use Illuminate\Database\Eloquent\Model;

class CashMachineService
{
    public function store(string $transactionClassName, $request): Model|MoneyTransaction
    {
        $transaction = TransactionFactory::make($transactionClassName);

        //Perform DB operations for limits 10 000 and 20 000

        return MoneyTransaction::create($transaction->getInputs($request->validated()));
    }
}
