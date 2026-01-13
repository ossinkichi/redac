<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'user' => 'required|string|min:11|cpf|unique:users',
            'password' => 'required|string|min:8|max:60|confirmed',
            'role' => 'required|string|in:student,teacher,secretary'
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'the password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.max' => 'The password may not be greater chan 60 characters.',
            'password.confirmed' => 'The passwords do not match.'
        ];
    }
}
