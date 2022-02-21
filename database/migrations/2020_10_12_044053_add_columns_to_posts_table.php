<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tariffs', function (Blueprint $table) {
            $table
				->tinyInteger('modificar')
				->length(1)
				->default(0); 
			$table
				->tinyInteger('eliminar')
				->length(1)
				->default(0);
        });

        Schema::table('posts', function (Blueprint $table) {
            $table
				->tinyInteger('modificar')
				->length(1)
				->default(0); 
			$table
				->tinyInteger('eliminar')
				->length(1)
				->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tariffs', function (Blueprint $table) {
            $table->dropColumn('modificar');
			$table->dropColumn('eliminar');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('modificar');
			$table->dropColumn('eliminar');
        });
    }
}
