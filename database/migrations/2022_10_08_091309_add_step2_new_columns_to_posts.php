<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStep2NewColumnsToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('equipment')->nullable();
            $table->string('power_rating')->nullable();
            $table->string('power_consumption')->nullable();
            $table->string('emissions_rating')->nullable();
            $table->string('emissions_consumption')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('equipment');
            $table->dropColumn('power_rating');
            $table->dropColumn('power_consumption');
            $table->dropColumn('emissions_rating');
            $table->dropColumn('emissions_consumption');
        });
    }
}
