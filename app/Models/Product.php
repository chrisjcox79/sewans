<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'product_name','product_price','market_price','product_code','product_code','product_type_id','goods_type_id','product_thumb',
        'status','category_id','is_hot','is_new','is_free_shipping','is_recommend','product_content',
        'sold_count','stock','post_money','view_count','comment_count','keywords','cost_price','weight','height','width','length','module_id','sku_code','brands_id'
    ];
    public function brands(){
        return $this->belongsTo(Brands::class);
    }
   final public function productImages(){
        return $this->hasMany(ProductImages::class,'product_id','id');
    }
    public function productSpec(){
        return $this->hasMany(ProductSpec::class,'product_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
