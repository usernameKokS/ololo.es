<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateYahooAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yahoo_accounts', function (Blueprint $table) {
            $table->integer('id', true);

            $table->string('email', 100);
            $table->string('password', 50);
            $table->string('imap', 50);
            $table->string('mileroticos_post_id', 50)->nullable()->default(NULL);
            $table->string('mileroticos_pass', 50)->nullable()->default(NULL);
            $table->integer('loquovip')->nullable()->default(NULL);
            $table->integer('adultguia')->nullable()->default(NULL);
            $table->enum('status', ['active', 'busy'])->default('active');

            $table->timestamp('update_time')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yahoo_accounts');
    }
}
