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
            'teacher' => 'exists:teachers,id',
            'room' => 'required|exists:rooms,id',
            'subject' => 'required|exists:subjects,id',
        ];
    }

    public function messages(): array
    {
        return [
            // 'teacher.required' => 'Professor não informado.',
            'teacher.exists' => 'Professor não encontrado.',

            'room.required' => 'classe não informado.',
            'room.required' => 'classe não encontrada.',

            'subject.required' => 'disciplina não informado.',
            'subject.exists' => 'disciplina não encontrado.',
        ];
    }
}
