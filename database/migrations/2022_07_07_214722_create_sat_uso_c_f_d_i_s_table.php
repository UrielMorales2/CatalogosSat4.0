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
        Schema::create('sat_uso_c_f_d_i_s', function (Blueprint $table) {
            $table->string('id_UsoCFDI', 5) -> primary();
            $table->string('descripcion');
            $table->string('PersonaFisica');
            $table->string('PersonaMoral');
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
        Schema::dropIfExists('sat_uso_c_f_d_i_s');
    }
};
