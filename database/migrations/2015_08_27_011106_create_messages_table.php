<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('messages', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_id');
          $table->string('body');
          $table->timestamps();
      });

      Schema::create('message_user', function (Blueprint $table) {
          $table->integer('user_id');
          $table->integer('message_id');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
          $table->string('subject');
          $table->string('status');
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
        //
        Schema::drop('messages');
        Schema::drop('message_user');
    }
}
