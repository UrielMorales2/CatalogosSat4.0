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
        Schema::create('sat_colonias', function (Blueprint $table) {
            $table->string('id_colonia', 10)->primary();
            $table->string('codigoPostal_id', 10);

            $table->foreign('codigoPostal_id')->references('id_CodigoPostal')->on('sat_codigo_postals');

            $table->string('nombreAsentamiento');
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
        Schema::dropIfExists('sat_colonias');
    }
};
