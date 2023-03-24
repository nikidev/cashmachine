<?php

namespace App\Factories;

use App\Contracts\Transaction;
use InvalidArgumentException;

class TransactionFactory
{
    public static function make(string $transactionClassName): Transaction
    {
        if(!class_exists($transactionClassName)) {
            throw new InvalidArgumentException('The transaction class does not exist !');
        }

        return  app($transactionClassName);
    }
}
