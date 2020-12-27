<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeStoreRequest extends FormRequest
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
            'type_name'=>'required|unique:goods_types,id'.$this->id,
            'attr.*.name'=>'required|string',
            'attr.*.value.*'=>'required|string',
            'attr.*.color.*'=>'required|string'


        ];
    }

    public function messages()
    {
        return [
            'type_name.required'=>'商品模型属性不能为空',
            'attr.required'=>'规格值不能为空',
            'attr.*.name.required'=>'规格名称不能为空',
            'attr.*.value.*.required'=>'规格值不能为空',
            'attr.*.color.*.required'=>'颜色值不能为空',




        ];
    }
}
