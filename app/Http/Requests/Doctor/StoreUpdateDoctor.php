<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDoctor extends FormRequest
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
            'fullname' => 'required,fullname,',
            'email' => 'required|unique:doctors'.$this->id,
            'phone' => 'required|min:9|max:15|unique:doctors'.$this->id
        ];
    }

    public function messages() {
        return [
            'fullname.required' => "Please enter name of doctor",
            'email.required' => "Please enter email",
            'email.unique' => "Email is already exists",
            'phone.required' => "Please enter phone",
            'phone.unique' => "Phone is already exists",
        ];
    }
}
