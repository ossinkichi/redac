<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomDisciplineTeacherRequest extends FormRequest
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
            'teacher_id' => 'required|integer|exists:teachers',
            'class_id' => 'required|integer|exists:classes',
            'discipline_id' => 'required|integer|exists:subjects',
        ];
    }

    public function message(): array
    {
        return [
            'teacher_id.required' => 'Professor não informado.',
            'teacher_id.exists' => 'Professor não encontrado.',

            'class_id.required' => 'classe não informado.',
            'class_id.required' => 'classe não encontrada.',

            'discipline_id.required' => 'disciplina não informado.',
            'discipline_id.exists' => 'disciplina não encontrado.',
        ];
    }
}
