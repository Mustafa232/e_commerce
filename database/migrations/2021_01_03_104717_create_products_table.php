<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('image');
            $table->string('slug');
            $table->double('price');
            $table->double('original_price')->nullable();
            $table->text('details');
            $table->text('seo_desc')->nullable();
            $table->text('seo_keys')->nullable();
            $table->timestamps();
        });

        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            

            $table->Integer('quantaty');
            
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->double('total_price');
            $table->string('address')->nullable();
            $table->Integer('quantaty');
            $table->string('currency');
            $table->Integer('status')->default(0);
            $table->Integer('seen')->default(0);
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            
            $table->string('product');
            $table->string('image')->nullable();
            $table->double('price');
            $table->Integer('quantaty');
            
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
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_details');
    }
}
