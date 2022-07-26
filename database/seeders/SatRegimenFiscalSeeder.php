<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatRegimenFiscalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '601',
            'descripcion'=>'	General de Ley Personas Morales',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '603',
            'descripcion'=>'	Personas Morales con Fines no Lucrativos',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '605',
            'descripcion'=>'	Sueldos y Salarios e Ingresos Asimilados a Salarios',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
       DB::table('sat_regimen_fiscals')->insert([
        'id_RegimenFiscal'=> '606',
        'descripcion'=>'	Arrendamiento',
        'PersonaFisica' => 'Sí',
        'PersonaMoral' => 'No',
        'status' => true,
       ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '607',
            'descripcion'=>'	Régimen de Enajenación o Adquisición de Bienes',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
       DB::table('sat_regimen_fiscals')->insert([
        'id_RegimenFiscal'=> '608',
        'descripcion'=>'	Demás ingresos',
        'PersonaFisica' => 'Sí',
        'PersonaMoral' => 'No',
        'status' => true,
       ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '610',
            'descripcion'=>'	Residentes en el Extranjero sin Establecimiento Permanente en México',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '611',
            'descripcion'=>'	Ingresos por Dividendos (socios y accionistas)',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '612',
            'descripcion'=>'	Personas Físicas con Actividades Empresariales y Profesionales',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '614',
            'descripcion'=>'	Ingresos por intereses',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
       DB::table('sat_regimen_fiscals')->insert([
        'id_RegimenFiscal'=> '615',
        'descripcion'=>'	Régimen de los ingresos por obtención de premios',
        'PersonaFisica' => 'Sí',
        'PersonaMoral' => 'No',
        'status' => true,
       ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '616',
            'descripcion'=>'	Sin obligaciones fiscales',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '620',
            'descripcion'=>'	Sociedades Cooperativas de Producción que optan por diferir sus ingresos',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '621',
            'descripcion'=>'	Incorporación Fiscal',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '622',
            'descripcion'=>'	Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '623',
            'descripcion'=>'	Opcional para Grupos de Sociedades',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '624',
            'descripcion'=>'	Coordinados',
            'PersonaFisica' => 'No',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '625',
            'descripcion'=>'	Régimen de las Actividades Empresariales con ingresos a través de Plataformas Tecnológicas',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_regimen_fiscals')->insert([
            'id_RegimenFiscal'=> '626',
            'descripcion'=>'	Régimen Simplificado de Confianza',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);

    }
}
