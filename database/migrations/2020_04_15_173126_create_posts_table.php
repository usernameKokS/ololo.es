<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');

            $table->string('phone')->nullable();

            $table->string('place')->nullable();
            $table->string('town')->nullable();
            $table->string('province')->nullable();
            $table->string('zona')->nullable();

            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('worktime')->nullable();
            $table->boolean('whatsapp')->nullable();
            $table->string('map')->nullable();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('status')->default('creating')->nullable();
            
            $table->boolean('archive')->default(false)->nullable();
            $table->boolean('publish')->default(false)->nullable();
            $table->timestamp('end_pay')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
