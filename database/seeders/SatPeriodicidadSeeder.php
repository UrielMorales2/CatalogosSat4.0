<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatPeriodicidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_periodicidads') -> insert([
        'id_Periodicidad' => '01',
        'descripcion' => 'Diario',
        'status' => true,
        ]);
        DB::table('sat_periodicidads') -> insert([
        'id_Periodicidad' => '02',
        'descripcion' => 'Semanal',
        'status' => true,
        ]);
        DB::table('sat_periodicidads') -> insert([
        'id_Periodicidad' => '03',
        'descripcion' => 'Quincenal',
        'status' => true,
        ]);
        DB::table('sat_periodicidads') -> insert([
        'id_Periodicidad' => '04',
        'descripcion' => 'Mensual',
        'status' => true,
        ]);
        DB::table('sat_periodicidads') -> insert([
        'id_Periodicidad' => '05',
        'descripcion' => 'Bimestral',
        'status' => true,
        ]);

    }
}
