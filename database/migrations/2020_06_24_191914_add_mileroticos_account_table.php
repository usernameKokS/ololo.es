<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddMileroticosAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mileroticos_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login', 100);
            $table->string('password', 50);
            $table->string('email', 50);
            $table->string('email_password', 50);
            $table->string('proxy', 100);
            $table->string('status', 50)->default('new');
            $table->string('notes', 150)->nullable()->default(NULL);

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
        //
    }
}
