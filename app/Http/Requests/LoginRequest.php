<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please note name is a required field',
            'name.alpha' => 'Name should always have alphabets only',
            'name.min:6' => 'Name is too short. make is longer, at least 6 characters',
        ];
    }
}
