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
        Schema::create('sat__impuestos', function (Blueprint $table) {
            $table->string('id_Impuesto', 5) -> primary();
             $table->string('descripcion');
             $table->string('Retención');
             $table->string('Traslado');
             $table->string('Local_o_federal');
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
        Schema::dropIfExists('sat__impuestos');
    }
};
