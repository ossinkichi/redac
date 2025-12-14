<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'registration' => 'required|string|min:10',
            'cpf' => 'required|digits:11|cpf|unique:students,cpf',
            'gender' => 'required|string|',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255|min:10',
            'email' => 'required|string|email|unique:students,email',
            'phone_number' => 'nullable|string|max:15',
            'course_id' => 'required|integer|exists:courses,id',
            'class_id' => 'required|integer|exists:classes,id',
            'is_active' => 'nullable|boolean',
            'formed' => 'nullable|boolean',
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
            'cpf.required' => 'Campo CPF é obrigatório.',
            'cpf.string' => 'Campo CPF deve ser um texto válido.',
            'cpf.size' => 'Campo CPF deve ter exatamente 11 caracteres.',
            'cpf.unique' => 'O CPF informado não é válido.',
        ];
    }
}
