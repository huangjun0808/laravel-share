<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname',40)->default('');
            $table->string('avatar',125)->nullable();
            $table->string('email',100)->nullable()->unique();
            $table->string('mobile',20)->nullable()->unique();
            $table->string('password',100)->default('');
            $table->tinyInteger('is_active',1)->default(0)->index();
            $table->rememberToken()->default('');
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
        Schema::dropIfExists('user');
    }
}
