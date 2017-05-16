<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('content');
            $table->integer('vote_num')->comment('问答答案得票数');
            $table->tinyInteger('status')->comment('答案状态 0初始状态 1采纳状态 2忽略状态');
            $table->integer('question_id')->index();
            $table->integer('user_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
