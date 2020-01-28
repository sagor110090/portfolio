<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrontendsTable extends Migration
{
  
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('description')->nullable();
            });
    }

  
    public function down()
    {
        Schema::drop('frontends');
    }
}
