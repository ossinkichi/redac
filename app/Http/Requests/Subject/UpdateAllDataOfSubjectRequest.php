<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAllDataOfSubjectRequest extends FormRequest
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
            'name' => 'required|string|unique:subjects,name',
            'description' => 'sometimes|string'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome não informado.',
            'name.unique' => 'Materia já existe.'
        ];
    }
}
