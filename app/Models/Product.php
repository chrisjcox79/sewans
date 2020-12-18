<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'product_name','product_price','market_price','description','product_code','product_code','product_type_id',
        'product_status','category_id','producy_type_id','is_hot','is_new','is_free_shipping','is_recommend',
        'cate_path','sold_count','stock','post_money','view_count','comment_count','product_attr','product_suppliers_id','volumn','keywords','cost_price','weight','module_id'
    ];
}
