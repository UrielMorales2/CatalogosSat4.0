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
        Schema::create('sat_clave_prod_servs', function (Blueprint $table) {
            $table->string('id_ProdServ', 10) -> primary();
            $table->string('descripcion');
            $table->string('Incluir_IVA_trasladado');
            $table->string('Incluir_IEPS_trasladado');
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
        Schema::dropIfExists('sat_clave_prod_servs');
    }
};
