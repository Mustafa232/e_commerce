<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Menu extends FormRequest
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
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'status' => 'required|boolean',
            'parent_id' => 'nullable|integer',
            ];
        }else{
            $array = [
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'status' => 'required|boolean',
            'parent_id' => 'nullable|integer',
            ];
        }

        return $array;
    }
}
