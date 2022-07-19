<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|unique:products',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'images' => 'required',

        ];
    }

    public function messages() {
        return [
            'name.required' => "Please enter product name",
            'name.unique' => "Product already exists",
            'content.required' => "Please enter content",
            'price.required' => "Please enter price",
            'category_id.required' => "Please enter category_id",
        ];
    }
}
