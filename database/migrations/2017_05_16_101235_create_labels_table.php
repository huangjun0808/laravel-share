<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //标签表
        Schema::create('label', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',100)->default('')->comment('标签名称');
            $table->string('icon',100)->nullable()->comment('标签图标');
            $table->integer('pid')->index();
            $table->tinyInteger('type')->default(0)->index()->comment('标签类型 0父标签 1子标签');
            $table->text('content')->comment('标签详情');
            $table->integer('follower_num')->default(0)->comment('关注人数');
            $table->tinyInteger('enabled')->default(1)->comment('是否可用');
        });

        //用户标签关注表
        Schema::create('user_label', function (Blueprint $table) {
            $table->integer('user_id')->index();
            $table->integer('label_id')->index();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('label');
        Schema::dropIfExists('user_label');
    }
}
