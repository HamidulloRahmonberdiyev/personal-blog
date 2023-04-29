<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Enter name!',
            'surname.required' => 'Enter surname!',
            'birthday.required' => 'Enter birthday!',
            'age.required' => 'Enter age!',
            'address.required' => 'Enter address!',
            'job.required' => 'Enter job!',
            'level.required' => 'Enter level!',
            'phone.required' => 'Enter phone!',
            'email.required' => 'Enter email!',
            'website.required' => 'Enter website!',
            'information.required' => 'Enter information!',
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
            'name' => ['required', 'max:255'],
            'surname' => ['required', 'max:255'],
            'birthday' => ['required', 'max:255'],
            'age' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'job' => ['required', 'max:255'],
            'level' => ['required', 'max:255'],
            'phone' => ['required', 'max:15'],
            'email' => ['required', 'max:255'],
            'website' => ['required', 'max:255'],
            'information' => ['required'],
            'photo.*' => ['mimes:png,jpg,jpeg,svg', 'required', 'max:2048'],
        ];
    }
}
