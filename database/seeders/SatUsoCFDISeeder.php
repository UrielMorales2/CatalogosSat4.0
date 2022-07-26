<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatUsoCFDISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'G01',
            'descripcion' =>'Adquisición de mercancías.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'G02',
            'descripcion' =>'Devoluciones, descuentos o bonificaciones.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'G03',
            'descripcion' =>'Gastos en general.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I01',
            'descripcion' =>'Construcciones.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I02',
            'descripcion' =>'Mobiliario y equipo de oficina por inversiones.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I03',
            'descripcion' =>'Equipo de transporte.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I04',
            'descripcion' =>'Equipo de computo y accesorios.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I05',
            'descripcion' =>'Dados, troqueles, moldes, matrices y herramental.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I06',
            'descripcion' =>'Comunicaciones telefónicas.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I07',
            'descripcion' =>'Comunicaciones satelitales.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'I08',
            'descripcion' =>'Otra maquinaria y equipo.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D01',
            'descripcion' =>'Honorarios médicos, dentales y gastos hospitalarios.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D02',
            'descripcion' =>'Gastos médicos por incapacidad o discapacidad.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D03',
            'descripcion' =>'Gastos funerales.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D04',
            'descripcion' =>'Donativos.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D05',
            'descripcion' =>'Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D06',
            'descripcion' =>'Aportaciones voluntarias al SAR.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D07',
            'descripcion' =>'Primas por seguros de gastos médicos.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D08',
            'descripcion' =>'Gastos de transportación escolar obligatoria.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D09',
            'descripcion' =>'Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'D10',
            'descripcion' =>'Pagos por servicios educativos (colegiaturas).',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'S01',
            'descripcion' =>'Sin efectos fiscales.  ',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'CP0',
            'descripcion' =>'	Pagos',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'Sí',
            'status' => true,
        ]);
        DB::table('sat_uso_c_f_d_i_s')->insert([
            'id_UsoCFDI' => 'CN0',
            'descripcion' =>'	Nómina',
            'PersonaFisica' => 'Sí',
            'PersonaMoral' => 'No',
            'status' => true,
        ]);

    }
}
