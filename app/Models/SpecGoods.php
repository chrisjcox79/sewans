<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecGoods extends Model
{
    //
    protected $fillable=['product_id','value_ids','value_names','price','cost_price','store_alert','sku_no'];

//
//        $table->unsignedBigInteger('product_id');
//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//            $table->string('value_ids');
//            $table->string('value_names');
//            $table->decimal('price',2);
//            $table->decimal('cost_price',2);
//            $table->unsignedInteger('store_alert');
//            $table->string('sku_no');
}
