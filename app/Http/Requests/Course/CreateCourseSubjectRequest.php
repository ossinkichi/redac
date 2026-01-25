<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseSubjectRequest extends FormRequest
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
            'course_id' => 'required|integer|exists:courses',
            'discipline_id' => 'required|integer|exists:subjects',
        ];
    }

    public function messages(): array
    {
        return [
            'course_id.required' => 'Curso não informado.',
            'course_id.exists' => 'Curso não encontrado.',

            'discipline_id.required' => 'Disciplina não informada.',
            'discipline_id.exists' => 'Disciplina não encntrada.'
        ];
    }
}
