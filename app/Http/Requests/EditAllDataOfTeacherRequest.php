<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAllDataOfTeacherRequest extends FormRequest
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
            'full_name' => 'required|string|min:25|max:355',
            'cpf' => 'required|string|max:11|unique:teachers,cpf',
            'gender' => 'required|string|in:male,female,outher',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|min:10|max:255',
            'email' => 'required|string|email|max:255|unique:teachers,email',
            'phone_number' => 'required|string|max:15',
            'specialization_subject_id' => 'required|integer|exists:subjects,id',
        ];
    }
}
