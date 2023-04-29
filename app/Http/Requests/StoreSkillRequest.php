<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkillRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Enter name!',
            'description.required' => 'Enter description!',
            'photo.required' => 'Enter photo!',
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'photo.*' => ['mimes:png,jpg,jpeg,svg', 'required', 'max:2048'],
        ];
    }
}
