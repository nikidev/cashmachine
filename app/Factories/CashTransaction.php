<?php

namespace App\Factories;

use App\Contracts\Transaction;

class CashTransaction implements Transaction
{
    public function getInputs(array $validatedData): array
    {
        return [
            'transaction_amount' => $validatedData['amount-option'],
        ];
    }
}
