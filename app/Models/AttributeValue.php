<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $fillable = ['goods_type_id', 'attribute_id','attribute_color_value',  'attribute_value'];


    public function attrs()
    {
        return $this->belongsTo(Attribute::class);
    }
}
