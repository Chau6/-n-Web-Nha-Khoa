<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            "first_name"=>"required",
            "last_name"=>"required",
            "email"=>"required|unique:user,email,".$this->id,
            "phone"=>"min:9|max:15|unique:user,phone,".$this->id
        ];
    }
    public function messages()
    {
        return [
            "first_name.required"=>"Please Enter First Name",
            "last_name.required"=>"Please Enter Last Name",
            "email.required"=>"Please Enter Email",
            "email.unique"=>"Email Have Exists",
            "phone.max"=>"Phone Number Must Not Exceed 15",
            "phone.unique"=>"Phone Have Exist"
        ];
    }
}
