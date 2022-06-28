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
