<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSecretaryEmployerRequest extends FormRequest
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
            'cpf' => 'required|integer|exists:teachers,cpf',
            'full_name' => 'required|string',
            'gender' => 'required|string|in:male,female,outher',
            'date_of_birth' => 'required|date',
            'email' => 'required|string|email|max:255|unique:secretaries,email',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'cpf.required' => 'Professor não informado.',
            'cpf.exists' => 'Professor não encontrado.',

            'full_name.required' => 'O nome completo é obrigatório.',

            'gender.required' => 'O gênero é obrigatório.',
            'gender.in' => 'Selecione um gênero.',

            'date_of_birth.required' => 'A data de nascimento é obrigatória.',
            'date_of_birth.date' => 'A data de nascimento deve ser uma data válida.',

            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.max' => 'O email não pode exceder 255 caracteres.',
            'email.unique' => 'O email inválido.',

            'phone_number.required' => 'O número de telefone é obrigatório.',
            'phone_number.max' => 'O número de telefone não pode exceder 15 caracteres',

            'address.required' => 'O endereço é obrigatório.',
            'address.max' => 'O endereço não pode exceder 500 caracteres.',
        ];
    }
}
