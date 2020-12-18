<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandFormUpdateRequest extends FormRequest
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
            'brand_name' => 'required|unique:brands,id' . $this->id,
            'sort' => 'required|integer|min:0|max:999',
            'old_logo'=>'required',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            //
            'brand_name.required' => '品牌名称不能为空',
            'brand_name.unique' => '品牌名称已存在',
            'sort.required' => '排序不能为空',
            'sort.min' => '排序最小值只能为0',
            'sort.integer' => '排序只能为数字',
        ];
    }
}
