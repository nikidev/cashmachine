<?php

namespace App\Factories;

use App\Contracts\Transaction;

class CardTransaction implements Transaction
{
    public function getInputs(array $validatedData): array
    {
       return [
            'transaction_amount' =>  $validatedData['amount-card'],
            'transaction_details' => [
               'card-number' => $validatedData['card-number'],
               'card-holder' => $validatedData['card-holder'],
               'expiration-date' => $validatedData['expiration-date'],
               'cvv' =>  $validatedData['cvv'],
            ]
        ];
    }
}
