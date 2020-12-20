<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttributeFormRequest extends FormRequest
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
            'goods_type_id'=>'required|gt:0',
            'attr'=>'required|array'
           
        
        ];
    }

    public function messages()
    {
        return [
            'goods_type_id.gt'=>'请选择模型分类',
            'attr.required'=>'规格值不能为空',
           
            

        ];
    }
}
