<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CardTransactionRequest extends FormRequest
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
            'card-number' => 'required|starts_with:4|numeric|digits:16',
            'card-holder' => 'required|alpha:ascii',
            'expiration-date' => 'required|size:7|date_format:m/Y|after:+2 months',
            'cvv' => 'required|numeric|digits:3',
            'amount-card' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [

        ];
    }
}
