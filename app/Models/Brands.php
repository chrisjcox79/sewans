<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    //
    protected $fillable = ['brand_name','sort','status','logo'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
