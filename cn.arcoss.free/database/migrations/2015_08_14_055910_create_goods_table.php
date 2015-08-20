<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category');
            $table->integer('brand');
            $table->string('goods_name')->unique();
            $table->decimal('marking_price');
            $table->decimal('seller_price');
            $table->string('img_big_url');
            $table->string('img_origon_url');
            $table->string('img_small_url');
            $table->integer('amount');
            $table->string('color');
            $table->boolean('is_recommand');
            $table->boolean('is_hot');
            $table->boolean('is_top');
            $table->string('intro');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
