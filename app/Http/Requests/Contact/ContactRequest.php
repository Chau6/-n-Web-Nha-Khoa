<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "username" => "required",
            "email" => "required",
            "message" => "required"
        ];
    }
    public function messages()
    {
        return [
            "username.required" => "Enter Your Name",
            "email" => "Enter Your Email",
            "message" => "Enter Message"
        ];
    }
}
