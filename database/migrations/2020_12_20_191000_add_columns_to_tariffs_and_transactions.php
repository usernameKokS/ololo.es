<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTariffsAndTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tariffs', function (Blueprint $table) {
			$table->string('pay_id')->default('');
        });
		
		Schema::table('transactions', function (Blueprint $table) {
            $table->string('pay_id')->default('');
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
			$table->dropColumn('pay_id');
        });
		
		Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('pay_id');
        });
    }
}
