<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->string('site')->nullable();
            $table->string('login')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('link')->nullable();
            $table->string('linkModificar')->nullable();
            $table->string('proxy')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('unixtime_posting')->default(0)->nullable();
            $table->bigInteger('unixtime_update')->default(0)->nullable();
            $table->bigInteger('unixtime_check')->default(0)->nullable();

            
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
        Schema::dropIfExists('forums');
    }
}
