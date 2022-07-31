<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
            'name' => 'required|unique:products,name,'.$this->id,
            "content"=>"required",
            "price"=>"required",
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function messages() {
        return [
            'name.required' => "Please enter product name",
            'name.unique' => "Product already exists",
            "content.required"=>"Please Enter Content",
            "price.required"=>"Please Enter Price",
            // 'images.required' =>'Pls Enter Image',
            // 'images.image' =>'Pls Enter Image',
            // 'images.mimes' =>'Image Must Be jpeg, png, jpg, gif, svg, ',
        ];
    }
}
