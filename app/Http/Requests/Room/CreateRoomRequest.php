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
            'series' => 'required|integer',
            'course' => 'required|string',
            'shift' => 'required|string|in:morning,afternoon,night',
            'room' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'series.required' => 'Serie nào informada.',

            'course.required' => 'Curso nào informado.',

            'shif.required' => 'Turno nào informado.',
            'shif.in' => 'Turno nào informado.',

            'room.required' => 'sala nào informado.',
        ];
    }
}
