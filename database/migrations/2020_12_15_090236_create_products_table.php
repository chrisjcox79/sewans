<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name')->comment('商品名称');
            $table->decimal('product_price',10,2)->comment('商品价格');
            $table->decimal('market_price',10,2)->comment('市场价格');
            $table->decimal('cost_price',10,2)->comment('成本价');
            // $table->string('description')->nullable()->comment('商品描述');
            $table->string('product_code')->comment('商品编码');
            $table->string('product_thumb')->comment('商品封面');
            $table->integer('status')->default(0)->comment('上否上架，1是 0 否');
            $table->integer('category_id')->comment('商品分类');
            $table->integer('goods_type_id')->comment('商品类型');
            $table->integer('is_hot')->default(0)->comment('是否热销');
            $table->integer('is_new')->default(0)->comment('是否新品');
            $table->integer('is_free_shipping')->default(0)->comment('是否免运费');
            $table->integer('is_recommend')->default(0)->comment('是否推荐');
           // $table->string('cate_path')->nullable();
            //$table->string('product_attr')->nullable();
            $table->unsignedInteger('sold_count')->default(0)->comment('商品销量');
            $table->unsignedInteger('stock')->default(0)->comment('商品库存');
            $table->decimal('post_money',10,2)->nullable()->comment('商品邮费');
            $table->unsignedInteger('view_count')->default(0)->comment('商品浏览量');
            $table->unsignedInteger('comment_count')->default(0)->comment('商品评价数量');
            $table->string('keywords')->nullable()->comment('关键字');
            $table->integer('module_id')->default(1)->comment('运费模板');
            $table->decimal('weight',8,2)->nullable()->comment('商品重量');
            $table->decimal('length',8,2)->nullable()->comment('商品长度');
            $table->decimal('height',8,2)->nullable()->comment('商品高度');
            $table->decimal('width',8,2)->nullable()->comment('商品宽度');
            $table->string('sku_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
