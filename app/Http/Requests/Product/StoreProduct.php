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
        ];
    }

    public function messages() {
        return [
            'name.required' => "Vui lòng nhập tên SP",
            'name.unique' => "Tên SP đã tồn tại rồi",
            'content.required' => "Vui lòng nhập content",
            'price.required' => "Vui lòng nhập giá",
            'category_id.required' => "Vui lòng nhập category_id",
        ];
    }
}
