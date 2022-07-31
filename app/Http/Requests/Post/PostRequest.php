<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "name"=>"required|unique:post",
            "content"=>"required",
            "category_id"=>"required",
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'extra_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Please Enter Post Name",
            "name.unique"=> "Post Name Have Exists",
            "content.required"=>"Please Enter Content",
            "category_id.required"=>"Please Enter Category",  
            'images.required' =>'Pls Enter Image',
            'images.image' =>'Pls Enter Image',
            'images.mimes' =>'Image Must Be jpeg, png, jpg, gif, svg',
            'extra_images.required' =>'Pls Enter Image',
            'extra_images.image' =>'Pls Enter Image',
            'extra_images.mimes' =>'Image Must Be jpeg, png, jpg, gif, svg',
        ];
    }
}
