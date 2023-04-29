<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'role_id.required' => 'Enter role!',
            'name.required' => 'Enter name!',
            'email.required' => 'Enter email!',
            'password.required' => 'Enter password!',
            'confirm_password.required' => 'Enter confirm password!',
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
            'role_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],    
            'password' => ['required', 'min:8'],    
            'confirm_password' => ['required', 'same:password'],    
        ];
    }
}
