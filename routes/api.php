<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoSatController;


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
Route::post('/CatalogoSat_Moneda_editar/{id_Catalogo_Moneda}', [CatalogoSatController::class, 'CatalogoSat_Moneda_editar']);
Route::post('/CatalogoSat_MonedacambiarEstatus/{id_Catalogo_Moneda}', [CatalogoSatController::class, 'CatalogoSat_MonedacambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de tipos de comprobante.----------------------------------------------------
Route::get('/CatalogoSat_TipoDeComprobante_mostrar', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_mostrar']);
Route::post('/CatalogoSat_TipoDeComprobante_agregar', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_agregar']);
Route::post('/CatalogoSat_TipoDeComprobante_editar/{id_TipoComprobante}', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobante_editar']);
Route::post('/CatalogoSat_TipoDeComprobantecambiarEstatus/{id_TipoComprobante}', [CatalogoSatController::class, 'CatalogoSat_TipoDeComprobantecambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Exportacion.----------------------------------------------------
Route::get('/CatalogoSat_Exportacion_mostrar', [CatalogoSatController::class, 'CatalogoSat_Exportacion_mostrar']);
Route::post('/CatalogoSat_Exportacion_agregar', [CatalogoSatController::class, 'CatalogoSat_Exportacion_agregar']);
Route::post('/CatalogoSat_Exportacion_editar/{id_Exportacion}', [CatalogoSatController::class, 'CatalogoSat_Exportacion_editar']);
Route::post('/CatalogoSat_ExportacioncambiarEstatus/{id_Exportacion}', [CatalogoSatController::class, 'CatalogoSat_ExportacioncambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Metodo Pago.----------------------------------------------------
Route::get('/CatalogoSat_MetodoPago_mostrar', [CatalogoSatController::class, 'CatalogoSat_MetodoPago_mostrar']);
Route::post('/CatalogoSat_MetodoPago_agregar', [CatalogoSatController::class, 'CatalogoSat_MetodoPago_agregar']);
Route::post('/CatalogoSat_MetodoPago_editar/{id_MetodoPago}', [CatalogoSatController::class, 'CatalogoSat_MetodoPago_editar']);
Route::post('/CatalogoSat_MetodoPagocambiarEstatus/{id_MetodoPago}', [CatalogoSatController::class, 'CatalogoSat_MetodoPagocambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Periodicidad.----------------------------------------------------
Route::get('/CatalogoSat_Periodicidad_mostrar', [CatalogoSatController::class, 'CatalogoSat_Periodicidad_mostrar']);
Route::post('/CatalogoSat_Periodicidad_agregar', [CatalogoSatController::class, 'CatalogoSat_Periodicidad_agregar']);
Route::post('/CatalogoSat_Periodicidad_editar/{id_Periodicidad}', [CatalogoSatController::class, 'CatalogoSat_Periodicidad_editar']);
Route::post('/CatalogoSat_PeriodicidadcambiarEstatus/{id_Periodicidad}', [CatalogoSatController::class, 'CatalogoSat_PeriodicidadcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Meses.----------------------------------------------------
Route::get('/CatalogoSat_Mes_mostrar', [CatalogoSatController::class, 'CatalogoSat_Mes_mostrar']);
Route::post('/CatalogoSat_Mes_agregar', [CatalogoSatController::class, 'CatalogoSat_Mes_agregar']);
Route::post('/CatalogoSat_Mes_editar/{id_mes}', [CatalogoSatController::class, 'CatalogoSat_Mes_editar']);
Route::post('/CatalogoSat_MescambiarEstatus/{id_mes}', [CatalogoSatController::class, 'CatalogoSat_MescambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Tipo Relacion.----------------------------------------------------
Route::get('/CatalogoSat_TipoRelacion_mostrar', [CatalogoSatController::class, 'CatalogoSat_TipoRelacion_mostrar']);
Route::post('/CatalogoSat_TipoRelacion_agregar', [CatalogoSatController::class, 'CatalogoSat_TipoRelacion_agregar']);
Route::post('/CatalogoSat_TipoRelacion_editar/{id_Relacion}', [CatalogoSatController::class, 'CatalogoSat_TipoRelacion_editar']);
Route::post('/CatalogoSat_TipoRelacioncambiarEstatus/{id_Relacion}', [CatalogoSatController::class, 'CatalogoSat_TipoRelacioncambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de RegimenFiscal.----------------------------------------------------
Route::get('/CatalogoSat_RegimenFiscal_mostrar', [CatalogoSatController::class, 'CatalogoSat_RegimenFiscal_mostrar']);
Route::post('/CatalogoSat_RegimenFiscal_agregar', [CatalogoSatController::class, 'CatalogoSat_RegimenFiscal_agregar']);
Route::post('/CatalogoSat_RegimenFiscal_editar/{id_Relacion}', [CatalogoSatController::class, 'CatalogoSat_RegimenFiscal_editar']);
Route::post('/CatalogoSat_RegimenFiscalcambiarEstatus/{id_Relacion}', [CatalogoSatController::class, 'CatalogoSat_RegimenFiscalcambiarEstatus']);
