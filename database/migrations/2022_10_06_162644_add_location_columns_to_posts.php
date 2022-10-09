<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocationColumnsToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->string('location_lat')->nullable();
            $table->string('location_lng')->nullable();
            $table->string('operation')->nullable();
            $table->string('street')->nullable();
            $table->integer('house_number')->nullable();
            $table->integer('road_number')->nullable();
            $table->integer('kilometer_number')->nullable();
            $table->string('gate')->nullable();
            $table->string('gate_value')->nullable();
            $table->string('property_type')->nullable();
            $table->string('urbanization')->nullable();
            $table->string('blog')->nullable();
            $table->boolean('is_professional')->default(0);
            $table->string('planta')->nullable();
            $table->string('last_floor')->nullable();
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
            $table->dropColumn('location');
            $table->dropColumn('location_lat');
            $table->dropColumn('location_lng');
            $table->dropColumn('operation');
            $table->dropColumn('street');
            $table->dropColumn('house_number');
            $table->dropColumn('road_number');
            $table->dropColumn('kilometer_number');
            $table->dropColumn('gate');
            $table->dropColumn('gate_value');
            $table->dropColumn('property_type');
            $table->dropColumn('urbanization');
            $table->dropColumn('blog');
            $table->dropColumn('is_professional');
            $table->dropColumn('planta');
            $table->dropColumn('last_floor');
        });
    }
}
