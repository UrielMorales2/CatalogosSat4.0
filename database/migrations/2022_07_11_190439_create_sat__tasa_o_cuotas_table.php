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
        Schema::create('sat__tasa_o_cuotas', function (Blueprint $table) {
            $table->id();
            $table->string('rango_o_Fijo');
            $table->string('Valor_mínimo')->nullable();
            $table->string('Valor_Maximo')->nullable();
            $table->string('Impuesto');
            $table->string('Factor');
            $table->string('Traslado');
            $table->string('Retención');
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
        Schema::dropIfExists('sat__tasa_o_cuotas');
    }
};
