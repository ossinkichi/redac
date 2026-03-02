<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'full_name' => 'required|string|max:255|min:15',
            'registration' => 'required|string|min:10|unique:students,registration',
            'cpf' => 'required|max:14|cpf|unique:students,cpf',
            'gender' => 'required|string|in:Masculino,Feminino,Outro',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'email' => 'required|string|email|unique:students,email',
            'phone_number' => 'nullable|string|max:15',
            'course_id' => 'required|integer|exists:courses,id',
            'formed' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Campo nome é obrigatório.',
            'full_name.string' => 'Campo nome deve ser um texto válido.',
            'full_name.max' => 'Campo nome deve ter no máximo 255 caracteres.',
            'full_name.min' => 'Campo nome deve ter no mínimo 15 caracteres.',

            'registration.required' => 'Campo matrícula é obrigatório.',
            'registration.string' => 'Campo matrícula deve ser um texto válido.',
            'registration.min' => 'Campo matrícula deve ter no mínimo 10 caracteres.',
            'registration.unique' => 'Matrícula já existente.',

            'cpf.required' => 'Campo CPF é obrigatório.',
            'cpf.string' => 'Campo CPF deve ser um texto válido.',
            'cpf.max' => 'Campo CPF deve ter no meximo 14 caracteres.',
            'cpf.unique' => 'O CPF informado não é válido.',
            'cpf.cpf' => 'O CPF informado não é válido.',

            'gender.required' => 'Genêro não informado.',
            'gender.in' => 'Genêro não informado.',

            'date_of_birth.required' => 'data de nascimento não informado.',

            'address.required' => 'Endereço não informado.',

            'email.required' => 'Email nào informado.',
            'email.email' => 'Email invalido.',
            'email.unique' => 'Email indisponivel.',

            'course_id.required' => 'Curso não informado',
            'course_id.exists' => 'Curso não encontrado.',
        ];
    }
}
