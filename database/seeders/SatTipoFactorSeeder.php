<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatTipoFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat__tipo_factors')->insert([
            'id_TipoFactor' =>'Tasa',
            'status' => true,
        ]);
        DB::table('sat__tipo_factors')->insert([
            'id_TipoFactor' =>'Cuota',
            'status' => true,
        ]);
        DB::table('sat__tipo_factors')->insert([
            'id_TipoFactor' =>'Exento',
            'status' => true,
        ]);

    }
}
