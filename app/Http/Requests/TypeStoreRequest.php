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
            'type_name'=>'required',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'type_name.required'=>'模型名称不能为空',
            'type_name.unique'=>'模型名称已存在',
            'type_name.required'=>'规格名称不能为空',
        ];
    }
}
