<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
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
            $table->string('proxy_geo')->nullable();
            $table->string('status')->nullable()->default('active');
            $table->bigInteger('unixtime_posting')->default(0)->nullable();
            $table->bigInteger('unixtime_update')->default(0)->nullable();
            $table->bigInteger('unixtime_check')->default(0)->nullable();

            $table->integer('number_of_views')->default(0)->nullable();
            $table->integer('view_phones')->default(0)->nullable();
            $table->integer('contacted_by_email')->default(0)->nullable();
            $table->integer('auto_renovados')->default(0)->nullable();
            $table->integer('shared_information')->default(0)->nullable();

            $table->integer('number_of_views2')->default(0)->nullable();
            $table->integer('view_phones2')->default(0)->nullable();
            $table->integer('auto_renovados2')->default(0)->nullable();

            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
