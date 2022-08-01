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
            "first_name"=>"required|max:20",
            "last_name"=>"required|max:20",
            "avatar"=>"image|mimes:jpeg,png,jpg,gif,svg",
            "email"=>"required|unique:user,email,".$this->id,
            "phone"=>"max:15",
        ];
    }
    public function messages()
    {
        return [
            "first_name.required"=>"Please Enter First Name",
            "last_name.required"=>"Please Enter Last Name",
            "avatar.image"=>"Image Only",
            "avatar.mimes"=>"Only jpeg png jpg gif svg",
            "email.required"=>"Please Enter Email",
            "email.unique"=>"Email Have Exist",
            "phone.max"=>"Phone Number Must Not Exceed 15",
        ];
    }
}
