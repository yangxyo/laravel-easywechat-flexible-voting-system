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
            $table->string('OpenId')->nullable();
            $table->string('email')->nullable();
            $table->string('img')->nullable();
            $table->string('address')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('profession')->nullable();
            $table->string('real_name')->nullable();
            $table->string('tel')->nullable();
            $table->string('nickname');
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
        Schema::dropIfExists('users');
    }
}
