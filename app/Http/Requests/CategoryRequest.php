<?php

namespace App\Http\Requests;

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
            //
            'cate_name'=>'required',
            'sort'=>'required|integer|min:0|max:100',
            'is_show'=>'required',
            'is_hot'=>'required',
            'pid'=>'required',
        ];
    }
    public function messages()
    {
        return [
            //
            'cate_name.required'=>'分类名称不能为空',
            'sort.required'=>'排序不能为空',
            'sort.integer'=>'排序只能为数字',
        ];
    }
}
