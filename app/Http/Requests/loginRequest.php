<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|string|unique:users',
            'password' => 'required|string|min:8|max:60',
        ];
    }

    public function messages(): array
    {
        return [
            'user.required' => 'Campo usuário é obrigatório.',
            'user.string' => 'Campo usuário deve ser um texto válido.',
            'password.required' => 'Campo senha é obrigatório.',
            'password.string' => 'Campo senha deve ser um texto válido.',
            'password.min' => 'Campo senha deve ter no mínimo 8 caracteres.',
            'password.max' => 'Campo senha deve ter no máximo 60 caracteres.',
        ];
    }
}
