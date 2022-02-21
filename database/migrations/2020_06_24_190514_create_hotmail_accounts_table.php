<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHotmailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotmail_accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->string('login');
            $table->string('password');
            $table->string('status')->default('active');
            $table->string('pasion_pass')->nullable()->default(NULL);
            $table->string('mundosexanuncio_pass')->nullable()->default(NULL);

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
        Schema::dropIfExists('hotmail_accounts');
    }
}
