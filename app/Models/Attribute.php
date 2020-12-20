<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    
    protected $fillable=['goods_type_id','attribute_value','sort','attribute_color'];

    public function types()
    {
        return $this->belongsTo(GoodsType::class);
    }
}
