<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role' => 'required',
            'name' => 'required',
            'id_number' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'role.required' => 'Please select a role',
            'name.required' => 'The Name is required',
            'id_number.required' => 'The ID-Number is required',
            'email.required' => 'The Email field is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'email.email' => 'The Email is not valid email.'
        ];
    }
}
