<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'description'   => 'nullable',
            'color' => 'nullable',
            'size'  => 'nullable',
            'dimention' => 'nullable',
            'categories' => 'nullable',
            'sub_cat'  => 'nullable',
            'page_title' => 'nullable',
            'meta_description'  => 'nullable',
            'url_title' => 'nullable',
            'ordering' => 'nullable',
            'sidebar_ordering' => 'nullable',
            'Aksesoris' => 'nullable',
            'cara_pasang'   => 'nullable',
            'slideshows'    => 'nullable',
            'below_banner_tagline'  => 'nullable',
            'below_banner_title'    => 'nullable',
            'below_banner_desc' => 'nullable',
            'right_banner'  => 'nullable',
            'banner_bawah'  => 'nullable',
            'keunggulan_produk_1'   => 'nullable',
            'keunggulan_produk_2'   => 'nullable',
            'keunggulan_produk_3'   => 'nullable',
            'keunggulan_produk_4'   => 'nullable',
            'katalog_link'  => 'nullable',
            'banner_bawah_link' => 'nullable',
            'keunggulan_text_1' => 'nullable',
            'keunggulan_text_2' => 'nullable',
            'keunggulan_text_3' => 'nullable',
            'keunggulan_text_4' => 'nullable',
            'keunggulan_link_4' => 'nullable',
            'katalog_label' => 'nullable',
            'keunggulan_link_3' => 'nullable',
            'keunggulan_link_2' => 'nullable',
            'keunggulan_link_1' => 'nullable',
        ];
    }
}
