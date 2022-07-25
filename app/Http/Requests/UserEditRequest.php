<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
        ];
    }
    public function messages() {
        return [
            'first_name.required' => "Please enter your first name",
            'last_name.required' => "Please enter your last name",
            'email.required' => "Please enter your email",
            'phone.required' => "Please enter your phone number",
        ];
    }
}
