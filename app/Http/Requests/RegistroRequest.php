<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegistroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(4)->letters()->symbols()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obligatorio',
            'name.string' => 'O nome informado não é válido',
            'email.required' => 'O email é obligatorio',
            'email.email' => 'O email é inválido',
            'email.unique' => 'Esse email já é cadastrado',
            'password' => 'A senha deve ter no mínimo 4 caracteres incluso letras e no minimo 1 símbolo',
        ];
    }
}
