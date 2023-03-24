<?php

namespace App\Factories;

use App\Contracts\Transaction;

class BankTransaction implements Transaction
{
    public function getInputs(array $validatedData): array
    {
        return [
            'transaction_amount' =>  $validatedData['amount-bank-transfer'],
            'transaction_details' => [
                'account-number' => $validatedData['account-number'],
                'customer-name' => $validatedData['customer-name'],
                'transfer-date' => $validatedData['transfer-date'],
            ]
        ];
    }
}
