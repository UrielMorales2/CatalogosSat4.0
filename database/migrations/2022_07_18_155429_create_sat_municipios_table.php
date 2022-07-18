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
        Schema::create('sat_municipios', function (Blueprint $table) {
            $table->string('id_municipio', 10)->primary();
            $table->string('estado_id', 10);

            $table->foreign('estado_id')->references('id_estado')->on('sat_estados');

            $table->string('descripcion');
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
        Schema::dropIfExists('sat_municipios');
    }
};
