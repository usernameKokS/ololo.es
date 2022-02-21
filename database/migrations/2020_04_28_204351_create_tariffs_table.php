<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->string('name')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->default('wait')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->string('order_number')->nullable();

            $table->string('pasion_status', 20)->nullable()->default('new');
            $table->string('skokka_status', 20)->nullable()->default('new');
            $table->string('milanunciosex_status', 20)->nullable()->default('new');
            $table->string('sexoyrelax_status', 20)->nullable()->default('new');
            $table->string('eanuncios_status', 20)->nullable()->default('new');
            $table->string('coneroticas_status', 20)->nullable()->default('new');
            $table->string('mundoanuncioerotico_status', 20)->nullable()->default('new');
            $table->string('escortpasion_status', 20)->nullable()->default('new');
            $table->string('mundosexanuncio_status', 20)->nullable()->default('new');
            $table->string('loquovip_status', 20)->nullable()->default('new');
            $table->string('mileroticos_status', 20)->nullable()->default('new');
            $table->string('adultguia_status', 20)->nullable()->default('new');
            $table->string('slumi_status', 20)->nullable()->default('new');
            $table->string('hott_status', 20)->nullable()->default('new');
            $table->string('sexobarato_status', 20)->nullable()->default('new');
            $table->string('ociosexual_status', 20)->nullable()->default('new');

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
        Schema::dropIfExists('tariffs');
    }
}
