<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    //
        protected $fillable =['product_id','small_img','big_img'];

        public function product(){
            return $this->belongsTo(Product::class,'product_id','id');
        }
}
