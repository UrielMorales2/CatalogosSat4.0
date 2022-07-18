<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat_estados', function (Blueprint $table) {
            $table->string('id_estado', 10)->primary();
            $table->string('pais_id', 5);

            $table->foreign('pais_id')->references('id_Pais')->on('sat_pais');

            $table->string('nombreEstado');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('sat_estados');
    }
};
