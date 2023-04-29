<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFileRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Enter name!',
            'file_url.required' => 'Enter file!',
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
            'name' => ['required', 'max:255', 'min:3'],
            'file_url.*' => ['required', 'mimes:doc,docx,pdf', 'max:20480'],
        ];
    }
}
