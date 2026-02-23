<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomRequest extends FormRequest
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
            'series' => 'required|integer',
            'course' => 'required|int',
            'shift' => 'required|string|in:matutino,vespertino,noturno',
            'identification' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'series.required' => 'Serie nào informada.',

            'course.required' => 'Curso nào informado.',

            'shift.required' => 'Turno nào informado.',
            'shift.in' => 'Turno nào informado.',

            'identification.required' => 'sala nào informado.',
        ];
    }
}
