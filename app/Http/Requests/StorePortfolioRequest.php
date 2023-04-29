<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'category_id.required' => 'Enter category!',
            'name.required' => 'Enter name!',
            'link.required' => 'Enter link!',
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
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required','string', 'max:255', 'min:3'],
            'link' => ['required', 'string'],
            'photo.*' => ['mimes:png,jpg,jpeg,svg,gif', 'required', 'max:2048'],
        ];
    }
}
