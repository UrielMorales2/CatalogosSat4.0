<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatFormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sat_forma_pagos')->insert([
            'catalogo_FormaPago' => '01',	
            'descripcion' => 'Efectivo',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '02',	
            'descripcion' => 'Cheque nominativo',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '03',	
            'descripcion' => 'Transferencia electrónica de fondos',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '04',	
            'descripcion' => 'Tarjeta de crédito',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '05',	
            'descripcion' => 'Monedero electrónico',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '06',	
            'descripcion' => 'Dinero electrónico',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '08',	
            'descripcion' => 'Vales de despensa',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '12',	
            'descripcion' => 'Dación en pago',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '13',	
            'descripcion' => 'Pago por subrogación',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '14',	
            'descripcion' => 'Pago por consignación',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '15',	
            'descripcion' => 'Condonación',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '17',	
            'descripcion' => 'Compensación',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '23',	
            'descripcion' => 'Novación',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '24',	
            'descripcion' => 'Confusión',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '25',	
            'descripcion' => 'Remisión de deuda',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '26',	
            'descripcion' => 'Prescripción o caducidad',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '27',	
            'descripcion' => 'A satisfacción del acreedor',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '28',	
            'descripcion' => 'Tarjeta de débito',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '29',	
            'descripcion' => 'Tarjeta de servicios',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '30',	
            'descripcion' => 'Aplicación de anticipos',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '31',	
            'descripcion' => 'Intermediario pagos',
            'status' => true,
        ]);
        DB::table('sat_forma_pagos')->insert([
            
           'catalogo_FormaPago' => '99',	
            'descripcion' => 'Por definir',
            'status' => true,
        ]);
    }   
}
