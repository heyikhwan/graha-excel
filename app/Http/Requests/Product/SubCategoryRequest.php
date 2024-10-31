<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'parent'            => 'required',
            'name'              => 'required',
            'image'             => 'required',
            'page_title'        => 'required',
            'meta_description'  => 'required',
            'url_title'  => 'required',
            'ordering'          => 'required',
        ];
    }
}
