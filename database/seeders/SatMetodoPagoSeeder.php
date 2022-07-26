<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatMetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_metodo_pagos')->insert([
        'id_MetodoPago' => 'PUE',
        'descripcion' =>'Pago en una sola exhibición',
        'status' => true,
        ]);
        DB::table('sat_metodo_pagos')->insert([
        'id_MetodoPago' => 'PPD',
        'descripcion' =>'Pago en parcialidades o diferido',
        'status' => true,
        ]);

    }
}
