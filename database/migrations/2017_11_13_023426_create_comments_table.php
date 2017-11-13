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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('cid');
            $table->integer('uid')->unsigned();
            $table->integer('aid')->unsigned();
            $table->text('content');
            $table->string('imgURL')->nullable();
            $table->foreign('uid')->references('id')->on('users');
            $table->foreign('aid')->references('aid')->on('articles');
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
        Schema::dropIfExists('comments');
    }
}
