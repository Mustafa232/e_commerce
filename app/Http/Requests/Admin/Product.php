<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $array = [];
        if ($this->get('id') != null) {
            $array = [
            'name' => 'required|string|max:255',
            'details' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'seo_desc' => 'nullable',
            'seo_keys' => 'nullable',
            'price' => 'required',
            ];
        }else{
            $array = [
            'name' => 'required|string|max:255',
            'details' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'seo_desc' => 'nullable',
            'seo_keys' => 'nullable',
            'price' => 'required',
            ];
        }

        return $array;
    }
}
