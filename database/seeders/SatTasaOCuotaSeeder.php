<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatTasaOCuotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.000000',
            'Impuesto'=> 'IVA',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'No',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.160000',
            'Impuesto'=> 'IVA',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'No',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Rango',
            'Valor_mínimo' => '0.000000',
            'Valor_Maximo' => '0.160000',
            'Impuesto'=> 'IVA',
            'Factor' => 'Tasa',
            'Traslado' => 'No',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.080000',
            'Impuesto'=> 'IVA Crédito aplicado del 50%',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'No',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.265000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.300000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.530000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.500000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '1.600000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.304000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.250000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.090000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.080000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.070000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.060000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.030000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'No',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Fijo	',
            'Valor_mínimo' => '',
            'Valor_Maximo' => '0.000000',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Tasa',
            'Traslado' => 'Sí',
            'Retención' => 'No',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Rango',
            'Valor_mínimo' => '0.000000',
            'Valor_Maximo' => '59.144900',
            'Impuesto'=> 'IEPS',
            'Factor' => 'Cuota',
            'Traslado' => 'Sí',
            'Retención' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat__tasa_o_cuotas')->insert([
            'rango_o_Fijo' => 'Rango',
            'Valor_mínimo' => '0.000000',
            'Valor_Maximo' => '0.350000',
            'Impuesto'=> 'ISR',
            'Factor' => 'Tasa',
            'Traslado' => 'No',
            'Retención' => 'Sí',
            'status' => true,
        ]);

    }
}
