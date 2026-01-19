<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSimpleDataOfStudentRequest extends FormRequest
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
            'full_name' => 'required|string|max:255|min:15',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255|min:10',
            'email' => 'required|string|email|unique:students,email',
            'phone_number' => 'nullable|string|max:15',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Campo nome é obrigatório.',
            'full_name.string' => 'Campo nome deve ser um texto válido.',
            'full_name.max' => 'Campo nome deve ter no máximo 255 caracteres.',
            'full_name.min' => 'Campo nome deve ter no mínimo 15 caracteres.',

            'date_of_birth.required' => 'Campo data de nascimento é obrigatório.',
            'date_of_birth.date' => 'Campo data de nascimento deve ser uma data válida.',

            'address.required' => 'Campo endereço é obrigatório.',
            'address.max' => 'Campo endereço deve ter no máximo 255 caracteres.',
            'address.min' => 'Campo endereço deve ter no mínimo 10 caracteres.',
            'address.string' => 'Campo endereço deve ser um texto válido.',

            'email.required' => 'Email nà informado.',
            'email.email' => 'Email inválido.',
            'email.unique' => 'O email informado já está em uso.',
        ];
    }
}
