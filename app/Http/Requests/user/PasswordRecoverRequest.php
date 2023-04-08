<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRecoverRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => ['string', 'required', 'min:45', 'max:45'],
            'password' => ['string', 'required', 'min:8']
        ];
    }
}
