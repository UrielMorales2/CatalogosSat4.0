<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_estados')->insert([
            'id_estado' => 'AGU',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Aguascalientes',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'BCN',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Baja California',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'BCS',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Baja California Sur',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CAM',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Campeche',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CHP',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Chiapas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CHH',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Chihuahua',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'COA',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Coahuila',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'COL',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Colima',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CMX',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Ciudad de México',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'DUR',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Durango',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'GUA',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Guanajuato',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'GRO',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Guerrero',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'HID',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Hidalgo',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'JAL',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Jalisco',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MEX',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Estado de México',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MIC',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Michoacán',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MOR',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Morelos',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NAY',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Nayarit',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NLE',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Nuevo León',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'OAX',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Oaxaca',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'PUE',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Puebla',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'QUE',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Querétaro',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ROO',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Quintana Roo',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SLP',
            'pais_id' =>'MEX',
            'nombreEstado' =>'San Luis Potosí',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SIN',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Sinaloa',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SON',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Sonora',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'TAB',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Tabasco',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'TAM',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Tamaulipas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'TLA',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Tlaxcala',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'VER',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Veracruz',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'YUC',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Yucatán',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ZAC',
            'pais_id' =>'MEX',
            'nombreEstado' =>'Zacatecas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'AL	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'labama',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'AK	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'laska',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'AZ	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'rizona',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'AR	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'rkansas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'alifornia',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NC	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'arolina del Norte',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SC	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'arolina del Sur',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CO	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'olorado',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'CT	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'onnecticut',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ND	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'akota del Norte',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SD	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'akota del Sur',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'DE	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'elaware',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'FL	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'lorida',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'GA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'eorgia',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'HI	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'awái',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ID	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'daho',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'IL	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'llinois',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'IN	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ndiana',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'IA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'owa',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'KS	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ansas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'KY	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'entucky',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'LA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'uisiana',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ME	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'aine',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MD	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'aryland',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'assachusetts',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MI	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'íchigan',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MN	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'innesota',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MS	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'isisipi',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MO	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'isuri',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MT	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ontana',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NE	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ebraska',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NV	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'evada',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NJ	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ueva Jersey',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NY	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ueva York',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NH	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'uevo Hampshire',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NM	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'uevo México',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'OH	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'hio',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'OK	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'klahoma',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'OR	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'regón',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'PA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ensilvania',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'RI	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'hode Island',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'TN	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ennessee',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'TX	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'exas',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'UT	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'tah',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'VT	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ermont',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'VA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'irginia',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'WV	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'irginia Occidental',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'WA	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'ashington',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'WI	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'isconsin',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'WY	',
            'pais_id' =>'SA	',
            'nombreEstado' =>'yoming',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'ON	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'ntario ',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'QC	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Quebec ',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NS	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Nueva Escocia',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NB	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'uevo Brunswick ',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'MB	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Manitoba',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'BC	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Columbia Británica',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'PE	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Isla del Príncipe Eduardo',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'SK	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Saskatchewan',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'AB	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Alberta',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NL	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Terranova y Labrador',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'NT	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Territorios del Noroeste',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'YT	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Yukón',
            'status' => true,
        ]);
        DB::table('sat_estados')->insert([
            'id_estado' => 'UN	',
            'pais_id' =>'AN	',
            'nombreEstado' =>'Nunavut',
            'status' => true,
        ]);

    }
}
