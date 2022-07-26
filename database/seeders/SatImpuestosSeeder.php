<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SatImpuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat__impuestos')->insert([
            'id_Impuesto' => '001',
            'descripcion' => 'ISR',
            'Retención' => 'Si	',
            'Traslado' =>'No	',
            'Local_o_federal' => 'Federal',
            'status' => true,
        ]);
        DB::table('sat__impuestos')->insert([
            'id_Impuesto' => '002',
            'descripcion' => 'IVA',
            'Retención' => 'Si	',
            'Traslado' =>'Si	',
            'Local_o_federal' => 'Federal',
            'status' => true,
        ]);
        DB::table('sat__impuestos')->insert([
            'id_Impuesto' => '003',
            'descripcion' => 'IEP',
            'Retención' => '	Si',
            'Traslado' =>'	Si',
            'Local_o_federal' => '	Federal',
            'status' => true,
        ]);

    }
}
