<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class CouponCodes extends Model
{
    //
    protected $dateFormat = 'Y-m-d H:i:s';
    const TYPE_FIXED = 'fixed';
    const TYPE_PERCENT = 'percent';

    public static $typeMap = [
        self::TYPE_FIXED   => '固定金额',
        self::TYPE_PERCENT => '比例',
    ];

    protected $fillable = [
        'name',
        'code',
        'type',
        'value',
        'total',
        'used',
        'min_amount',
        'not_before',
        'not_after',
        'enabled',
    ];
    protected $appends = ['description'];

    protected $casts = [
        'enabled' => 'boolean',
    ];
    // 指明这两个字段是日期类型
    protected $dates = ['not_before', 'not_after'];

    public static function findAvailableCode($length = 16)
    {
        do {
            // 生成一个指定长度的随机字符串，并转成大写
            $code = strtoupper(Str::random($length));
        // 如果生成的码已存在就继续循环
        } while (self::query()->where('code', $code)->exists());

        return $code;
    }

    
    public function getDescriptionAttribute($coupons)
    {
      
       foreach($coupons as $coupon){
        $coupon->current_used =  $coupon->used.'/'.$coupon->total;
        
        if ($coupon->min_amount > 0) {
            $coupon->desc = '满'.str_replace('.00', '',$coupon->min_amount);
        }
        if ($coupon->type === self::TYPE_PERCENT) {
             $coupon->desc.='优惠'.str_replace('.00', '',$coupon->value).'%';
             continue;
            
        }
         $coupon->desc.='减'.str_replace('.00', '',$coupon->value);
       }

       return $coupons;
    }
}
