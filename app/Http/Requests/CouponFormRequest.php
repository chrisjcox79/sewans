<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponFormRequest extends FormRequest
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
            // 'name',
        'name'=>'required|unique:coupon_codes,id'.$this->id,
        'code'=>'required|unique:coupon_codes,id'.$this->id,
        'type'=>'required',
        'value'=>'required',
        'total'=>'required|min:1|max:9999',
        'min_amount'=>'required|min:0|max:9999',
        'not_before'=>'required',
        'not_after'=>'required',
        'enabled'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'优惠卷名称不能为空',
            'name.unique'=>'优惠卷名称已存在',
            'code.required'=>'优惠码不能为空',
            'code.required'=>'优惠码已存在',
            'type.required'=>'优惠卷类型不能为空',
            'value.required'=>'优惠卷折扣不能为空',
            'total.required'=>'优惠卷发行数量不能为空',
            'min_amount.required'=>'优惠卷消费金额不能为空',
            'not_before.required'=>'优惠卷开始时间不能为空',
            'not_after.required'=>'优惠卷结束时间不能为空',
            'enabled.required'=>'优惠卷启用状态不能为空',
        ];
    }
}
