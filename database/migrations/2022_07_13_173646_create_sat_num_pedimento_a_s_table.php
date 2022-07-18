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
        Schema::create('sat_num_pedimento_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('Aduana_id', 10);
            $table->foreign('Aduana_id')->references('id_Aduana')->on('sat_aduanas');
            // $table->foreign('Aduana_id')->constrained('sat_aduanas');
            $table->string('Patente');
            $table->string('Ejercicio');
            $table->string('Cantidad');
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
        Schema::dropIfExists('sat_num_pedimento_a_s');
    }
};
