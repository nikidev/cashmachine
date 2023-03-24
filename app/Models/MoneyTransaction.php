<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class MoneyTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_amount', 'transaction_details'];

    protected $casts = [
        'transaction_details' => 'array'
    ];
}
