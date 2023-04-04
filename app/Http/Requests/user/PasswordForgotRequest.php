<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class PasswordForgotRequest extends FormRequest
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
            'email' => ['email', 'required', 'exists:users,email']
        ];
    }


    public function messages()
    {
        return  [
            'email.required' => 'ელ.ფოსტა არის აუცილებელი!',
            'email.email' => 'ელ.ფოსტა აუცილებელია იყოს მეილის ფორმატში!',
            'email.exists' => 'ელ.ფოსტა არ არსებობს!',

        ];
    }
}
