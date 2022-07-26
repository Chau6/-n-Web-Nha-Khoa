<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDatLich extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'required|min:9|max:15',
            'age' => 'required|min:1|max:2',
            'date' => 'required',
        ];
    }
    public function messages() {
        return [
            'name.required' => "Please enter your name",
            'phone.required' => "Please enter your phone number",
            'age.required' => "Please enter your age",
            'date.required' => "Please enter date",
        ];
    }
}
