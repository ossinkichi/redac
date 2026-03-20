<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateActivityRequest extends FormRequest
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
            'teacher' => 'required|exists:teachers,id',
            'room' => 'required|exists:rooms,id',
            'subject' => 'required|exists:subjects,id',
            'title' => 'required|min_digits:10',
            'description' => 'required|min_digits:15',
            'links' => 'nullable',
            'file' => 'nullable',
        ];
    }

    public function messages()
    {
        return parent::messages();
    }
}
