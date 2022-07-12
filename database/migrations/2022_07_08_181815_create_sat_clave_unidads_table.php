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
        Schema::create('sat_clave_unidads', function (Blueprint $table) {
            $table->string('id_ClaveUnidad', 5) -> primary();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('nota')->nullable();
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
        Schema::dropIfExists('sat_clave_unidads');
    }
};
