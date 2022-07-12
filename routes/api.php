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

// ------------------------------RUUTAS DEL Catálogo de Paises.----------------------------------------------------
Route::get('/CatalogoSat_Paises_mostrar', [CatalogoSatController::class, 'CatalogoSat_Paises_mostrar']);
Route::post('/CatalogoSat_Paises_agregar', [CatalogoSatController::class, 'CatalogoSat_Paises_agregar']);
Route::post('/CatalogoSat_Paises_editar/{id_Pais}', [CatalogoSatController::class, 'CatalogoSat_Paises_editar']);
Route::post('/CatalogoSat_PaisescambiarEstatus/{id_Pais}', [CatalogoSatController::class, 'CatalogoSat_PaisescambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Uso CFDI.----------------------------------------------------
Route::get('/CatalogoSat_UsoCFDI_mostrar', [CatalogoSatController::class, 'CatalogoSat_UsoCFDI_mostrar']);
Route::post('/CatalogoSat_UsoCFDI_agregar', [CatalogoSatController::class, 'CatalogoSat_UsoCFDI_agregar']);
Route::post('/CatalogoSat_UsoCFDI_editar/{id_UsoCFDI}', [CatalogoSatController::class, 'CatalogoSat_UsoCFDI_editar']);
Route::post('/CatalogoSat_UsoCFDIcambiarEstatus/{id_UsoCFDI}', [CatalogoSatController::class, 'CatalogoSat_UsoCFDIcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de ClaveProdServ.----------------------------------------------------
Route::get('/CatalogoSat_ClaveProdServ_mostrar', [CatalogoSatController::class, 'CatalogoSat_ClaveProdServ_mostrar']);
Route::post('/CatalogoSat_ClaveProdServ_agregar', [CatalogoSatController::class, 'CatalogoSat_ClaveProdServ_agregar']);
Route::post('/CatalogoSat_ClaveProdServ_editar/{id_ProdServ}', [CatalogoSatController::class, 'CatalogoSat_ClaveProdServ_editar']);
Route::post('/CatalogoSat_ClaveProdServcambiarEstatus/{id_ProdServ}', [CatalogoSatController::class, 'CatalogoSat_ClaveProdServcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Clave Unidad.----------------------------------------------------
Route::get('/CatalogoSat_ClaveUnidad_mostrar', [CatalogoSatController::class, 'CatalogoSat_ClaveUnidad_mostrar']);
Route::post('/CatalogoSat_ClaveUnidad_agregar', [CatalogoSatController::class, 'CatalogoSat_ClaveUnidad_agregar']);
Route::post('/CatalogoSat_ClaveUnidad_editar/{id_ClaveUnidad}', [CatalogoSatController::class, 'CatalogoSat_ClaveUnidad_editar']);
Route::post('/CatalogoSat_ClaveUnidadcambiarEstatus/{id_ClaveUnidad}', [CatalogoSatController::class, 'CatalogoSat_ClaveUnidadcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Objeto Impuestos.----------------------------------------------------
Route::get('/CatalogoSat_ObjetoImp_mostrar', [CatalogoSatController::class, 'CatalogoSat_ObjetoImp_mostrar']);
Route::post('/CatalogoSat_ObjetoImp_agregar', [CatalogoSatController::class, 'CatalogoSat_ObjetoImp_agregar']);
Route::post('/CatalogoSat_ObjetoImp_editar/{id_ObjetoImp}', [CatalogoSatController::class, 'CatalogoSat_ObjetoImp_editar']);
Route::post('/CatalogoSat_ObjetoImpcambiarEstatus/{id_ObjetoImp}', [CatalogoSatController::class, 'CatalogoSat_ObjetoImpcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Impuestos.----------------------------------------------------
Route::get('/CatalogoSat_impuesto_mostrar', [CatalogoSatController::class, 'CatalogoSat_impuesto_mostrar']);
Route::post('/CatalogoSat_impuesto_agregar', [CatalogoSatController::class, 'CatalogoSat_impuesto_agregar']);
Route::post('/CatalogoSat_impuesto_editar/{id_Impuesto}', [CatalogoSatController::class, 'CatalogoSat_impuesto_editar']);
Route::post('/CatalogoSat_impuestocambiarEstatus/{id_Impuesto}', [CatalogoSatController::class, 'CatalogoSat_impuestocambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de TipoFactor.----------------------------------------------------
Route::get('/CatalogoSat_TipoFactor_mostrar', [CatalogoSatController::class, 'CatalogoSat_TipoFactor_mostrar']);
Route::post('/CatalogoSat_TipoFactor_agregar', [CatalogoSatController::class, 'CatalogoSat_TipoFactor_agregar']);
Route::post('/CatalogoSat_TipoFactor_editar/{id}', [CatalogoSatController::class, 'CatalogoSat_TipoFactor_editar']);
Route::post('/CatalogoSat_TipoFactorcambiarEstatus/{id}', [CatalogoSatController::class, 'CatalogoSat_TipoFactorcambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Taza o cuota.----------------------------------------------------
Route::get('/CatalogoSat_TasaOCuota_mostrar', [CatalogoSatController::class, 'CatalogoSat_TasaOCuota_mostrar']);
Route::post('/CatalogoSat_TasaOCuota_agregar', [CatalogoSatController::class, 'CatalogoSat_TasaOCuota_agregar']);
Route::post('/CatalogoSat_TasaOCuota_editar/{id}', [CatalogoSatController::class, 'CatalogoSat_TasaOCuota_editar']);
Route::post('/CatalogoSat_TasaOCuotacambiarEstatus/{id}', [CatalogoSatController::class, 'CatalogoSat_TasaOCuotacambiarEstatus']);

// ------------------------------RUUTAS DEL Catálogo de Taza o cuota.----------------------------------------------------
Route::get('/CatalogoSat_PatenteAduanal_mostrar', [CatalogoSatController::class, 'CatalogoSat_PatenteAduanal_mostrar']);
Route::post('/CatalogoSat_PatenteAduanal_agregar', [CatalogoSatController::class, 'CatalogoSat_PatenteAduanal_agregar']);
Route::post('/CatalogoSat_PatenteAduanal_editar/{id_PatenteAduanal}', [CatalogoSatController::class, 'CatalogoSat_PatenteAduanal_editar']);
Route::post('/CatalogoSat_PatenteAduanalcambiarEstatus/{id_PatenteAduanal}', [CatalogoSatController::class, 'CatalogoSat_PatenteAduanalcambiarEstatus']);
