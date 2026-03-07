<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeacherRequest extends FormRequest
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
            'full_name' => 'required|string|min:15|max:355',
            'cpf' => 'required|string|max:11|unique:teachers,cpf',
            'gender' => 'required|string|in:Masculino,Feminino,Outro',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:10|max:255',
            'email' => 'required|string|email|max:255|unique:teachers,email',
            'phone_number' => 'required|string|max:15|unique:teachers,phone_number',
            'subject_id' => 'required|exists:subjects,id',
            'is_active' => 'sometimes|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Adicone o nome completo',
            'full_name.string' => 'Precisa ser um texto válido.',
            'full_name.min' => 'Precisa ter no mínimo 25 caracteres.',
            'full_name.max' => 'No maximo 355 caracteres são permitidos.',

            'cpf.required' => 'Cpf inválido',
            'cpf.string' => 'Cpf inválido',
            'cpf.max' => 'Cpf inválido',
            'cpf.unique' => 'Cpf inválido',

            'gender.required' => 'Especifique o gênero',
            'gender.string' => 'Gênero não informado.',
            'gender.in' => 'Gênero não informado.',

            'date_of_birth.required' => 'Adicione a data de nascimento.',
            'date_of_birth.date' => 'Data de nascimento não informada.',

            'address.required' => 'Endereço não informado.',
            'address.string' => 'Endereço inválido.',
            'address.min' => 'Endereço inválido.',
            'address.max' => 'Endereço inválido.',

            'email.required' => 'E-mail não informado.',
            'email.string' => 'E-mail inválido.',
            'email.email' => 'E-mail inválido.',
            'email.max' => 'E-mail inválido.',
            'email.unique' => 'E-mail inválido.',

            'phone_number.required' => 'Número de telefone não informado.',
            'phone_number.string' => 'Número de telefone inválido.',
            'phone_number.max' => 'Número de telefone inválido.',
            'phone_number.unique' => 'Número de telefone em uso.',

            'subject_id.required' => 'Matéria de especialização não informada.',
            'subject_id.exists' => 'Matéria de especialização inválida.',

            'is_active.sometimes' => 'Status inválido.',
            'is_active.boolean' => 'Status inválido.',
        ];
    }
}
