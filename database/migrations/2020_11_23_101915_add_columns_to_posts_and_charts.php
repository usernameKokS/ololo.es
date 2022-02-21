<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPostsAndCharts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->datetime('deleted_at')->nullable();
            $table->boolean('is_delete')->default(false);
        });

        Schema::table('charts', function (Blueprint $table) {
            $table->date('create_date')->nullable();
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
            $table->dropColumn('deleted_at');
            $table->dropColumn('is_delete');
        });

        Schema::table('charts', function (Blueprint $table) {
            $table->dropColumn('create_date');
        });
    }
}
