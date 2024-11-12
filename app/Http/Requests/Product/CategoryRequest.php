<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return [
            'name'              => 'required',
            'description'  => 'nullable',
            'image'             => 'nullable',
            'page_title'        => 'nullable',
            'meta_description'  => 'nullable',
            'url_title'         => 'nullable',
            'ordering'          => 'nullable',
        ];
    }
}
