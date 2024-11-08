<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title'                 => 'required',
            'category'              => 'required',
            'image'                 => 'required',
            'image_alt_text'        => 'nullable',
            'description'           => 'required',
            'page_title'            => 'required',
            'meta_description'      => 'required',
            'meta_title'            => 'nullable',
            'meta_keyword'          => 'nullable',
            'url_title'             => 'required',
            'dt_published'          => 'required',
        ];
    }
}
