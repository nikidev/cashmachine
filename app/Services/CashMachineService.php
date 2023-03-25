<?php

namespace App\Services;

use App\Contracts\Transaction;
use App\Enums\MoneyLimit;
use App\Factories\CashTransaction;
use App\Factories\TransactionFactory;
use App\Models\MoneyTransaction;
use Illuminate\Database\Eloquent\Model;

class CashMachineService
{
    public function store(string $transactionClassName, $request): Model|MoneyTransaction|bool
    {
        $transaction = TransactionFactory::make($transactionClassName);

        $transactionInputs = $transaction->getInputs($request->validated());
        $transactionAmount = $transactionInputs['transaction_amount'];

        if(!$this->checkLimits($transaction, $transactionAmount)) {
            return false;
        }

        return MoneyTransaction::create($transactionInputs);
    }

    private function checkLimits(Transaction $transaction, $transactionAmount): bool
    {
        $this->initializeEmptyTransaction();

        if($transaction instanceof CashTransaction) {
            $totalCashAmount = MoneyTransaction::value('total_cash_amount');
            if($totalCashAmount >= MoneyLimit::CASH) {
                return false;
            }
            MoneyTransaction::increment('total_cash_amount', $transactionAmount);
        }

        $totalProcessingAmount = MoneyTransaction::value('total_processing_amount');
        if($totalProcessingAmount >= MoneyLimit::TOTAL) {
            return false;
        }
        MoneyTransaction::increment('total_processing_amount', $transactionAmount);

        return true;
    }

    private function initializeEmptyTransaction(): void
    {
        if(!MoneyTransaction::exists()) {
            MoneyTransaction::create([
                'total_cash_amount' => 0,
                'total_processing_amount' => 0,
            ]);
        }
    }
}
