<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoSatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/FormaPago_mostrar', [CatalogoSatController::class, 'FormaPago_mostrar']);
Route::post('/FormaPago_agregar', [CatalogoSatController::class, 'FormaPago_agregar']);
Route::post('/FormaPago_editar/{catalogo_FormaPago}', [CatalogoSatController::class, 'FormaPago_editar']);
// Route::delete('/FormaPagoEliminar/{catalogo_FormaPago}', [CatalogoSatController::class, 'FormaPagoEliminar']);
Route::post('/FormaPago_cambiarEstatus/{catalogo_FormaPago}', [CatalogoSatController::class, 'FormaPago_cambiarEstatus']);


// ------------------------------RUUTAS DEL CATALOGO MONEDA----------------------------------------------------
Route::get('/CatalogoSat_Moneda_mostrar', [CatalogoSatController::class, 'CatalogoSat_Moneda_mostrar']);
Route::post('/CatalogoSat_Moneda_agregar', [CatalogoSatController::class, 'CatalogoSat_Moneda_agregar']);
Route::post('/CatalogoSat_Moneda_editar/{catalogo_FormaPago}', [CatalogoSatController::class, 'CatalogoSat_Moneda_editar']);
Route::post('/CatalogoSat_MonedacambiarEstatus/{catalogo_FormaPago}', [CatalogoSatController::class, 'CatalogoSat_MonedacambiarEstatus']);


// ------------------------------RUUTAS DEL Catálogo de tipos de comprobante.----------------------------------------------------
Route::get('/CatalogoSat_TipoDeComprobante_mostrar', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_mostrar']);
Route::post('/CatalogoSat_TipoDeComprobante_agregar', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_agregar']);
Route::post('/CatalogoSat_TipoDeComprobante_editar/{id_TipoComprobante}', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_editar']);
Route::post('/CatalogoSat_TipoDeComprobantecambiarEstatus/{id_TipoComprobante}', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobantecambiarEstatus']);
