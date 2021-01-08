<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSpec extends Model
{
    //
    protected $fillable = ['price','product_id','value_ids','value_names','cost_price','store_alert','sku_no','store_count'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
