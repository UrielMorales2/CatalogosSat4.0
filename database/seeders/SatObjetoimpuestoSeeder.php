<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatObjetoimpuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_objetoimpuestos')->insert([
            'id_ObjetoImp' => '01',
            'descripcion' => 'No objeto de impuesto.',
            'status' => true,
        ]);
        DB::table('sat_objetoimpuestos')->insert([
            'id_ObjetoImp' => '02',
            'descripcion' => 'Sí objeto de impuesto.',
            'status' => true,
        ]);
        DB::table('sat_objetoimpuestos')->insert([
            'id_ObjetoImp' => '03',
            'descripcion' => 'Sí objeto del impuesto y no obligado al desglose.',
            'status' => true,
        ]);

    }
}
