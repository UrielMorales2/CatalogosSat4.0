<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatTipoRelacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '01',
        'descripcion' => 'Nota de crédito de los documentos relacionados',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '02',
        'descripcion' => 'Nota de débito de los documentos relacionados',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '03',
        'descripcion' => 'Devolución de mercancía sobre facturas o traslados previos',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '04',
        'descripcion' => 'Sustitución de los CFDI previos',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '05',
        'descripcion' => 'Traslados de mercancías facturados previamente',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '06',
        'descripcion' => 'Factura generada por los traslados previos',
        'status' => true,
        ]);
        DB::table('sat_tipo_relacions') -> insert([
        'id_Relacion' => '07',
        'descripcion' => 'CFDI por aplicación de anticipo',
        'status' => true,
        ]);
        
    }
}
