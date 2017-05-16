<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //评论表
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('content');
            $table->string('comment_type','50')->comment('评论类型 answer问题评论 article文章评论 question问答评论');
            $table->integer('answer_id')->nullable();
            $table->integer('article_id')->nullable();
            $table->integer('question_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
