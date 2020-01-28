<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomesTable extends Migration
{
  
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twiter_link')->nullable();
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('homes');
    }
}
