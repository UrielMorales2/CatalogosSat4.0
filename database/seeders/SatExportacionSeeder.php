<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatExportacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_exportacions')->insert([
        'id_Exportacion' => '01',
        'descripcion' => 'No aplica',
        'status' => true,
        ]);
        DB::table('sat_exportacions')->insert([
        'id_Exportacion' => '02',
        'descripcion' => 'Definitiva con clave A1',
        'status' => true,
        ]);
        DB::table('sat_exportacions')->insert([
        'id_Exportacion' => '03',
        'descripcion' => 'Temporal',
        'status' => true,
        ]);
        DB::table('sat_exportacions')->insert([
        'id_Exportacion' => '04',
        'descripcion' => 'Definitiva con clave distinta a A1 o cuando no existe enajenación en términos del CFF',
        'status' => true,
        ]);

    }
}
