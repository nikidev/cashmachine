<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('money_transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('transaction_amount', 9)->default(0);
            $table->json('transaction_details')->nullable();
            $table->decimal('total_cash_amount', 9)->default(0);
            $table->decimal('total_processing_amount', 9)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_transactions');
    }
};
