<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            "name"=>"required|unique:post,name,".$this->id,
            "content"=>"required",
            "category_id"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Please Enter Post Name",
            "name.unique"=> "Post Name Have Exists",
            "content.required"=>"Please Enter Content",
            "category_id.required"=>"Please Enter Category",  
        ];
    }
}
