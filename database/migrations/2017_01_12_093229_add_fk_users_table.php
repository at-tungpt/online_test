<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')
                  ->references('id')->on('roles')
                  ->onDelete('cascade');
            $table->foreign('test_id')
                  ->references('id')->on('tests')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users', function(Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['test_id']);
        });
    }
}
