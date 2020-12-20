<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    
    protected $fillable=['goods_type_id','attribute_name','sort'];

    public function types()
    {
        return $this->belongsTo(GoodsType::class);
    }

    public function attrValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
