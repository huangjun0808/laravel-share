<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //问题表
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title',125)->default('');
            $table->text('content');
            $table->tinyInteger('status')->default(1)->comment('问题状态0 待审核状态 1开放状态 4关闭状态');
            $table->integer('vote_num')->comment('得票数');
            $table->integer('answer_num')->comment('答案数');
            $table->integer('browse_num')->comment('浏览量');
            $table->integer('user_id')->index();
        });
        //用户问题关注表
        Schema::create('user_question', function (Blueprint $table) {
            $table->integer('user_id')->index();
            $table->integer('question_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
        Schema::dropIfExists('user_question');
    }
}
