<?php

namespace App\Http\Requests\user;

use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class RegisterRequest extends FormRequest
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
            'name' => ['string', 'required', 'min:5', 'max:16'],
            'surname' => ['string', 'required', 'min:2', 'max:16'],
            'email' => ['string', 'email', 'required', 'unique:users,email'],
            'password' => ['string', 'required_with:password_confirmation', 'same:password_confirmation', 'min:8'],
            'password_confirmation' => ['required'],
            'role' => ['integer', 'required', new Enum(UserRoleEnum::class)],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'სახელის ველის შევსება აუცილებელია!',
            'surname.required'  => 'გვარის ველის შევსება აუცილებელია!',
            'email.required'  => 'მეილის ველის შევსება აუცილებელია!',
            'password.required_with'  => 'აუცილებელია პაროლის გამეორება!',
            'password.same'  => 'აუცილებელია პაროლი ემთხვეოდეს გამეორებულ პაროლს!',
            'password_confirmation.required'  => 'პაროლის გამეორება აუცილებელია!',
            'role.required'  => 'როლის ველის შევსება აუცილებელია!',

            'name.string' => 'სახელის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
            'surname.string'  => 'გვარის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
            'email.string'  => 'ელ.ფოსტის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
            'email.email'  => 'ელ.ფოსტის ველი უნდა იყოს მეილის ფორმატში!',
            'email.unique'  => 'ელ.ფოსტა უკვე არსებობს!',
            'password.string'  => 'პაროლის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
            'password_confirmation.required'  => 'პაროლის ველი უნდა შედგებოდეს სიმბოლოებისაგან!',
            'role.required'  => 'მეილის ველის შევსება აუცილებელია!',
            'role.integer'  => 'როლის ველი უნდა იყოს არჩეული მოცემული ვარიანტებიდან!',

            'name.min'  => 'სახელი უნდა იყოს მინიმუმ 2 სიმბოლო!',
            'name.max'  => 'სახელი უნდა იყოს მაქსიმუმ 16 სიმბოლო!',
            'surname.min'  => 'გვარი უნდა იყოს მინიმუმ 2 სიმბოლო!',
            'surname.max'  => 'გვარი უნდა იყოს მაქსიმუმ 16 სიმბოლო!',
        ];
    }
}
