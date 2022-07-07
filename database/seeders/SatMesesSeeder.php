<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SatMesesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_meses')->insert([
            'id_mes' => '01',
            'descripcion' => 'Enero',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([ 
            'id_mes' => '02',
            'descripcion' => 'Febrero',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([ 
            'id_mes' => '03',
            'descripcion' => 'Marzo',
            'status' => true,
        ]);
         DB::table('sat_meses')->insert([  
            'id_mes' => '04',
            'descripcion' => 'Abril',
            'status' => true,
        ]);
         DB::table('sat_meses')->insert([ 
            'id_mes' => '05',
            'descripcion' => 'Mayo',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([  
            'id_mes' => '06',
            'descripcion' => 'Junio',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([ 
            'id_mes' => '07',
            'descripcion' => 'Julio',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '08',
            'descripcion' => 'Agosto',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '09',
            'descripcion' => 'Septiembre',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '10',
            'descripcion' => 'Octubre',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '11',
            'descripcion' => 'Noviembre',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '12',
            'descripcion' => 'Diciembre',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '13',
            'descripcion' => 'Enero-Febrero',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '14',
            'descripcion' => 'Marzo-Abril',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '15',
            'descripcion' => 'Mayo-Junio',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '16',
            'descripcion' => 'Julio-Agosto',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '17',
            'descripcion' => 'Septiembre-Octubre',
            'status' => true,
        ]);
        DB::table('sat_meses')->insert([
            'id_mes' => '18',
            'descripcion' => 'Noviembre-Diciembre',
            'status' => true,
        ]);

    }
}
