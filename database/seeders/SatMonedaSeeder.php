<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatMonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_tipo_de_comprobantes')->insert([
            'id_Catalogo_Moneda' => 'AED',
            'descripcion' => 'Dirham de EAU	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AFN',
            'descripcion' => 'Afghani	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ALL',
            'descripcion' => 'Lek	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AMD',
            'descripcion' => 'Dram armenio	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ANG',
            'descripcion' => 'Florín antillano neerlandés	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AOA',
            'descripcion' => 'Kwanza	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ARS',
            'descripcion' => 'Peso Argentino	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AUD',
            'descripcion' => 'Dólar Australiano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AWG',
            'descripcion' => 'Aruba Florin	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'AZN',
            'descripcion' => 'Azerbaijanian Manat	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BAM',
            'descripcion' => 'Convertibles marca	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BBD',
            'descripcion' => 'Dólar de Barbados	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BDT',
            'descripcion' => 'Taka	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BGN',
            'descripcion' => 'Lev búlgaro	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BHD',
            'descripcion' => 'Dinar de Bahrein	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BIF',
            'descripcion' => 'Burundi Franc	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BMD',
            'descripcion' => 'Dólar de Bermudas	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BND',
            'descripcion' => 'Dólar de Brunei	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BOB',
            'descripcion' => 'Boliviano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BOV',
            'descripcion' => 'Mvdol	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BRL',
            'descripcion' => 'Real brasileño	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BSD',
            'descripcion' => 'Dólar de las Bahamas	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BTN',
            'descripcion' => 'Ngultrum	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BWP',
            'descripcion' => 'Pula	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BYR',
            'descripcion' => 'Rublo bielorruso	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'BZD',
            'descripcion' => 'Dólar de Belice	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CAD',
            'descripcion' => 'Dólar Canadiense	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CDF',
            'descripcion' => 'Franco congoleño	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CHE',
            'descripcion' => 'WIR Euro	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CHF',
            'descripcion' => 'Franco Suizo	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CHW',
            'descripcion' => 'Franc WIR	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CLF',
            'descripcion' => 'Unidad de Fomento	',
            'decimales' => '4',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CLP',
            'descripcion' => 'Peso chileno	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CNY',
            'descripcion' => 'Yuan Renminbi	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'COP',
            'descripcion' => 'Peso Colombiano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'COU',
            'descripcion' => 'Unidad de Valor real	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CRC',
            'descripcion' => 'Colón costarricense	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CUC',
            'descripcion' => 'Peso Convertible	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CUP',
            'descripcion' => 'Peso Cubano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CVE',
            'descripcion' => 'Cabo Verde Escudo	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'CZK',
            'descripcion' => 'Corona checa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'DJF',
            'descripcion' => 'Franco de Djibouti	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'DKK',
            'descripcion' => 'Corona danesa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'DOP',
            'descripcion' => 'Peso Dominicano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'DZD',
            'descripcion' => 'Dinar argelino	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'EGP',
            'descripcion' => 'Libra egipcia	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ERN',
            'descripcion' => 'Nakfa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ETB',
            'descripcion' => 'Birr etíope	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'EUR',
            'descripcion' => 'Euro	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'FJD',
            'descripcion' => 'Dólar de Fiji	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'FKP',
            'descripcion' => 'Libra malvinense	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GBP',
            'descripcion' => 'Libra Esterlina	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GEL',
            'descripcion' => 'Lari	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GHS',
            'descripcion' => 'Cedi de Ghana	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GIP',
            'descripcion' => 'Libra de Gibraltar	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GMD',
            'descripcion' => 'Dalasi	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GNF',
            'descripcion' => 'Franco guineano	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GTQ',
            'descripcion' => 'Quetzal	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'GYD',
            'descripcion' => 'Dólar guyanés	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'HKD',
            'descripcion' => 'Dólar De Hong Kong	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'HNL',
            'descripcion' => 'Lempira	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'HRK',
            'descripcion' => 'Kuna	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'HTG',
            'descripcion' => 'Gourde	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'HUF',
            'descripcion' => 'Florín	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'IDR',
            'descripcion' => 'Rupia	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ILS',
            'descripcion' => 'Nuevo Shekel Israelí	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'INR',
            'descripcion' => 'Rupia india	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'IQD',
            'descripcion' => 'Dinar iraquí	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'IRR',
            'descripcion' => 'Rial iraní	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ISK',
            'descripcion' => 'Corona islandesa	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'JMD',
            'descripcion' => 'Dólar Jamaiquino	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'JOD',
            'descripcion' => 'Dinar jordano	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'JPY',
            'descripcion' => 'Yen	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KES',
            'descripcion' => 'Chelín keniano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KGS',
            'descripcion' => 'Som	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KHR',
            'descripcion' => 'Riel	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KMF',
            'descripcion' => 'Franco Comoro	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KPW',
            'descripcion' => 'Corea del Norte ganó	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KRW',
            'descripcion' => 'Won	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KWD',
            'descripcion' => 'Dinar kuwaití	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KYD',
            'descripcion' => 'Dólar de las Islas Caimán	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'KZT',
            'descripcion' => 'Tenge	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LAK',
            'descripcion' => 'Kip	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LBP',
            'descripcion' => 'Libra libanesa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LKR',
            'descripcion' => 'Rupia de Sri Lanka	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LRD',
            'descripcion' => 'Dólar liberiano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LSL',
            'descripcion' => 'Loti	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'LYD',
            'descripcion' => 'Dinar libio	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MAD',
            'descripcion' => 'Dirham marroquí	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MDL',
            'descripcion' => 'Leu moldavo	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MGA',
            'descripcion' => 'Ariary malgache	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MKD',
            'descripcion' => 'Denar	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MMK',
            'descripcion' => 'Kyat	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MNT',
            'descripcion' => 'Tugrik	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MOP',
            'descripcion' => 'Pataca	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MRO',
            'descripcion' => 'Ouguiya	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MUR',
            'descripcion' => 'Rupia de Mauricio	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MVR',
            'descripcion' => 'Rupia	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MWK',
            'descripcion' => 'Kwacha	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MXN',
            'descripcion' => 'Peso Mexicano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MXV',
            'descripcion' => 'México Unidad de Inversión (UDI)	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MYR',
            'descripcion' => 'Ringgit malayo	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'MZN',
            'descripcion' => 'Mozambique Metical	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NAD',
            'descripcion' => 'Dólar de Namibia	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NGN',
            'descripcion' => 'Naira	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NIO',
            'descripcion' => 'Córdoba Oro	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NOK',
            'descripcion' => 'Corona noruega	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NPR',
            'descripcion' => 'Rupia nepalí	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'NZD',
            'descripcion' => 'Dólar de Nueva Zelanda	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'OMR',
            'descripcion' => 'Rial omaní	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PAB',
            'descripcion' => 'Balboa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PEN',
            'descripcion' => 'Nuevo Sol	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PGK',
            'descripcion' => 'Kina	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PHP',
            'descripcion' => 'Peso filipino	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PKR',
            'descripcion' => 'Rupia de Pakistán	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PLN',
            'descripcion' => 'Zloty	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'PYG',
            'descripcion' => 'Guaraní	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'QAR',
            'descripcion' => 'Qatar Rial	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'RON',
            'descripcion' => 'Leu rumano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'RSD',
            'descripcion' => 'Dinar serbio	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'RUB',
            'descripcion' => 'Rublo ruso	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'RWF',
            'descripcion' => 'Franco ruandés	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SAR',
            'descripcion' => 'Riyal saudí	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SBD',
            'descripcion' => 'Dólar de las Islas Salomón	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SCR',
            'descripcion' => 'Rupia de Seychelles	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SDG',
            'descripcion' => 'Libra sudanesa	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SEK',
            'descripcion' => 'Corona sueca	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SGD',
            'descripcion' => 'Dólar De Singapur	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SHP',
            'descripcion' => 'Libra de Santa Helena	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SLL',
            'descripcion' => 'Leona	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SOS',
            'descripcion' => 'Chelín somalí	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
        'id_Catalogo_Moneda' => '  S',
        'descripcion' => 'D	Dólar de Suriname	',
        'decimales' => '2',
        'status' => true,
    ]);
        DB::table('tabsat_monedasntes')->insert([
            'id_Catalogo_Moneda' => 'SSP',
            'descripcion' => 'Libra sudanesa Sur	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'STD',
            'descripcion' => 'Dobra	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SVC',
            'descripcion' => 'Colon El Salvador	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SYP',
            'descripcion' => 'Libra Siria	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'SZL',
            'descripcion' => 'Lilangeni	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'THB',
            'descripcion' => 'Baht	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TJS',
            'descripcion' => 'Somoni	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TMT',
            'descripcion' => 'Turkmenistán nuevo manat	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TND',
            'descripcion' => 'Dinar tunecino	',
            'decimales' => '3',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TOP',
            'descripcion' => 'Pa anga	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TRY',
            'descripcion' => 'Lira turca	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TTD',
            'descripcion' => 'Dólar de Trinidad y Tobago	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TWD',
            'descripcion' => 'Nuevo dólar de Taiwán	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'TZS',
            'descripcion' => 'Shilling tanzano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'UAH',
            'descripcion' => 'Hryvnia	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'UGX',
            'descripcion' => 'Shilling de Uganda	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'USD',
            'descripcion' => 'Dólar americano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'USN',
            'descripcion' => 'Dólar estadounidense (día siguiente)	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'UYI',
            'descripcion' => 'Peso Uruguay en Unidades Indexadas (URUIURUI)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'UYU',
            'descripcion' => 'Peso Uruguayo	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'UZS',
            'descripcion' => 'Uzbekistán Sum	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'VEF',
            'descripcion' => 'Bolívar	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'VND',
            'descripcion' => 'Dong	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'VUV',
            'descripcion' => 'Vatu	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'WST',
            'descripcion' => 'Tala	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XAF',
            'descripcion' => 'Franco CFA BEAC	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XAG',
            'descripcion' => 'Plata	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XAU',
            'descripcion' => 'Oro	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XBA',
            'descripcion' => 'Unidad de Mercados de Bonos Unidad Europea Composite (EURCO)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XBB',
            'descripcion' => 'Unidad Monetaria de Bonos de Mercados Unidad Europea (UEM-6)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XBC',
            'descripcion' => 'Mercados de Bonos Unidad Europea unidad de cuenta a 9 (UCE-9)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XBD',
            'descripcion' => 'Mercados de Bonos Unidad Europea unidad de cuenta a 17 (UCE-17)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XCD',
            'descripcion' => 'Dólar del Caribe Oriental	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XDR',
            'descripcion' => 'DEG (Derechos Especiales de Giro)	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XOF',
            'descripcion' => 'Franco CFA BCEAO	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XPD',
            'descripcion' => 'Paladio	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XPF',
            'descripcion' => 'Franco CFP	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XPT',
            'descripcion' => 'Platino	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XSU',
            'descripcion' => 'Sucre	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XTS',
            'descripcion' => 'Códigos reservados específicamente para propósitos de prueba	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XUA',
            'descripcion' => 'Unidad ADB de Cuenta	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'XXX',
            'descripcion' => 'Los códigos asignados para las transacciones en que intervenga ninguna moneda	',
            'decimales' => '0',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'YER',
            'descripcion' => 'Rial yemení	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ZAR',
            'descripcion' => 'Rand	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ZMW',
            'descripcion' => 'Kwacha zambiano	',
            'decimales' => '2',
            'status' => true,
        ]);
        DB::table('sat_monedas')->insert([
            'id_Catalogo_Moneda' => 'ZWL',
            'descripcion' => 'Zimbabwe Dólar	',
            'decimales' => '2',
            'status' => true,
        ]);

    }
}