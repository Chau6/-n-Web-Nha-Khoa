<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            "password"=>"required|min:6",
        ];
    }
    public function messages()
    {
        return [
            "password.required"=>"Enter Password",
            "password.min"=>"Password at last 6 character"
        ];
    }
}
