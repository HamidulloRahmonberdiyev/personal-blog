<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppealRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Enter your name!',
            'email.required' => 'Enter your email!',
            'subject.required' => 'Enter subject!',
            'message.required' => 'Enter message!',
        ]; 
    }
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'max:255', 'min:3'],
            'subject' => ['required', 'string', 'max:255', 'min:5'],
            'message' => ['required', 'string', 'min:5'],
        ];
    }
}
