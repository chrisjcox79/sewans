<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductForm extends FormRequest
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
            //

            "product_name" => "required|unique:products",
            "product_price" => "required|integer|gt:0",
            "market_price" => "required|integer|gt:0",
            "product_code" => "required|integer|gt:0",
            "sku_code" => "required",
            "brands_id" => "required",
            "category_id" => "required",
           // "description" => "required",
            "is_new" => "required",
            "goods_images" => "required",
            "is_recommend" => "required",
            "is_hot" => "required",
            "status" => "required",
            "product_content" => "required",
            "product_thumb" => "required",
            "goods_type_id" => "required",
            "keywords" => "required",
            "item" => "required|array",

        ];
    }
}
