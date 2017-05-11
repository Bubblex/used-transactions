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
            // id
            $table->increments('id');

            // 发布人
            $table->integer('user_id')->unsigned();

            // 产品类型
            $table->integer('goods_type_id')->unsigned();

            // 产品名称
            $table->string('name');

            // 产品简介
            $table->string('summary');

            // 产品价格
            $table->decimal('price', 13, 2);

            // 联系方式
            $table->string('concat_telephone');

            // 联系人姓名
            $table->string('concat_name');

            // 产品详情
            $table->longText('detail');
            
            // 产品规格
            $table->longText('specification');

            // 使用情况
            $table->longText('use_situation');

            // 产品图片
            $table->string('image');

            // 产品状态
            $table->integer('status')->default(1);

            // 时间戳
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
        Schema::drop('goods');
        Schema::drop('users');
        Schema::drop('good_types');
    }
}
