<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatTipoDeComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_TipoComprobante' => 'I',
            'descripcion' =>'	Ingreso',
            'status' => true,
        ]);
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_TipoComprobante' => 'E',
            'descripcion' =>'	Egreso',
            'status' => true,
        ]);
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_TipoComprobante' => 'T',
            'descripcion' =>'	Traslado',
            'status' => true,
        ]);
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_TipoComprobante' => 'N',
            'descripcion' =>'	Nómina      ',
            'status' => true,
        ]);
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_TipoComprobante' => 'P',
            'descripcion' =>'	Pago',
            'status' => true,
        ]);

    }
}
