<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->id();

            $table->integer('ad_id')->nullable();

            $table->integer('number_of_views')->default(0)->nullable();
            $table->integer('view_phones')->default(0)->nullable();
            // $table->integer('contacted_by_email')->default(0)->nullable();
            $table->integer('auto_renovados')->default(0)->nullable();
            // $table->integer('shared_information')->default(0)->nullable();

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
        Schema::dropIfExists('charts');
    }
}
