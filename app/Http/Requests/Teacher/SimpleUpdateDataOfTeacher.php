<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class SimpleUpdateDataOfTeacher extends FormRequest
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
            'cpf' => 'required|string|max:11|exists:teachers,cpf',
            'full_name' => 'required|string|min:25|max:355',
            'email' => 'required|string|email|max:255|unique:teachers,email',
            'address' => 'required|string|min:10|max:255',
            'phone_number' => 'required|string|max:15',
        ];
    }

    public function messages(): array
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.string' => 'O campo CPF deve ser uma string.',
            'cpf.max' => 'O campo CPF deve ter no máximo 11 caracteres.',
            'cpf.exists' => 'O CPF informado não está cadastrado.',

            'full_name.required' => 'O campo nome completo é obrigatório.',
            'full_name.string' => 'O campo nome completo deve ser uma string.',
            'full_name.min' => 'O campo nome completo deve ter no mínimo 25 caracteres.',
            'full_name.max' => 'O campo nome completo deve ter no máximo 355 caracteres.',

            'email.required' => 'O campo email é obrigatório.',
            'email.string' => 'O campo email deve ser uma string.',
            'email.email' => 'O campo email deve ser um email válido.',
            'email.max' => 'O campo email deve ter no máximo 255 caracteres.',
            'email.unique' => 'O email informado já está em uso.',

            'address.required' => 'O campo endereço é obrigatório.',
            'address.string' => 'O campo endereço deve ser uma string.',
            'address.min' => 'O campo endereço deve ter no mínimo 10 caracteres.',
            'address.max' => 'O campo endereço deve ter no máximo 255 caracteres.',

            'phone_number.required' => 'O campo número de telefone é obrigatório.',
            'phone_number.string' => 'O campo número de telefone deve ser uma string.',
            'phone_number.max' => 'O campo número de telefone deve ter no máximo 15 caracteres.',
        ];
    }
}
