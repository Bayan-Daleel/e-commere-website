<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name'=>'required|max:255 |min:5',
            'price'=>'numeric|required',
            'category_id'=>'required|exists:categories,id',
            'slug'=>'required|unique:products,slug',
            'no-pieces'=>'required|numeric',
            'description'=>'required|min:10|max:255',
            'photo'=>'image'
        ];
    }
}
