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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('email',255)->nullable();
            $table->string('password',100)->nullable();
            $table->integer('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('number_phone',15)->nullable();
            $table->string('avatar',320)->nullable();
            $table->integer('role_id')->unsigned()->default(3);
            $table->integer('test_id')->unsigned()->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
