<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    //
    protected $fillable = ['type_name','status'];
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

}
