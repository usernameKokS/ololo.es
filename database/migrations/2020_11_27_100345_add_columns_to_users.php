<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('visitor_id')->nullable();
            $table->string('screen_resolution')->nullable();
            $table->text('fonts')->nullable();
            $table->string('languages')->nullable();
            $table->string('platform')->nullable();
            $table->string('timezone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ip_address');
            $table->dropColumn('user_agent');
            $table->dropColumn('visitor_id');
            $table->dropColumn('screen_resolution');
            $table->dropColumn('fonts');
            $table->dropColumn('languages');
            $table->dropColumn('platform');
            $table->dropColumn('timezone');
        });
    }
}
