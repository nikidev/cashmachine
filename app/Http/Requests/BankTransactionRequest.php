<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BankTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'account-number' => 'required|size:6|alpha_num',
            'customer-name' => 'required|regex:/[a-zA-Z0-9\s]/',
            'transfer-date' => 'required|size:10|date_format:d/m/Y|after_or_equal:today',
            'amount-bank-transfer' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [

        ];
    }
}
