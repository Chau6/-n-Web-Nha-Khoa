<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "email" => "required|unique:user,email",
            "last_name" => "required|max:20",
            "first_name" => "required|max:20",
            "password" => "required|min:6|max:20",
            "password_confirm"=>"required|min:6|max:20",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "Enter Email",
            "email.unique" => "Email already exist",
            "last_name.required" => "Enter Last Name",
            "last_name.max" => "Last Name Must Not Exceed 15 Characters",
            "first_name.required" => "Enter First Name",
            "first_name.max" => "First Name Must Not Exceed 15 Characters",
            "password.required" => "Enter Password",
            "password.min" => "Password at last 6 character",
            "password.max" => "Password cannot exceed 20 characters",
            "password_confirm.required"=>"Enter Confirm Password",
            "password_confirm.min"=>"Confrim Password at last 6 character",
            "password_confirm.max"=>"Confirm Password cannot exceed 20 characters",
        ];
    }
}
