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
        Schema::create('sat_codigo_postales', function (Blueprint $table) {
            $table->string('id_CodigoPostal', 10)->primary();
            $table->string('estado_id', 10);
            $table->string('municipio_id', 10)->nullable();
            $table->string('localidad_id', 10)->nullable();

            $table->foreign('estado_id')->references('id_estado')->on('sat_estados');
            $table->foreign('municipio_id')->references('id_municipio')->on('sat_municipios');
            $table->foreign('localidad_id')->references('id_Localidad')->on('sat_localidades');

            $table->string('estimulo_franja_fronterisa');
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
        Schema::dropIfExists('sat_codigo_postales');
    }
};
