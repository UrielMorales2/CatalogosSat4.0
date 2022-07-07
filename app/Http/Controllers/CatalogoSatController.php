<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatFormaPago;
use App\Models\SatMoneda;
use App\Models\SatTipoDeComprobante;
use App\Models\SatExportacion;
use App\Models\SatMetodoPago;
use App\Models\SatPeriodicidad;
use App\Models\SatMeses;
use App\Models\SatTipoRelacion;
use App\Models\SatRegimenFiscal;


class CatalogoSatController extends Controller
{
    public function FormaPago_mostrar()
    {
        $formapago = SatFormaPago::all();
        return \response($formapago);
    }

    public function FormaPago_agregar(Request $request)
    {  
        try{
            // return "hola";
            $formapago = new SatFormaPago();
            $formapago->fill($request->all());
            
            $formapago->save();
            return response($formapago, 200);
        } catch (\Exception $e) {
            // return "holaa";
            return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
            // return    response()->json([' error' , "el campo Catálogo Forma Pago ya existe, ingrese uno diferente" .$e->getMessage()]);
        }   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $catalogo_FormaPago
     * @return \Illuminate\Http\Response
     */
    public function FormaPago_editar($catalogo_FormaPago, Request $request )
    {
        // return "hola";
        $formapago = SatFormaPago::where('catalogo_FormaPago',$request->catalogo_FormaPago)->update($request->all()) ;
        // $formapago -> catalogo_FormaPago = $request -> catalogo_FormaPago;
        // $formapago -> descripcion = $request -> descripcion;
        // $formapago -> status = $request -> status;

        // $formapago -> update();
        return $formapago;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $catalogo_FormaPago
     * @return \Illuminate\Http\Response
     */
    // public function FormaPagoEliminar($catalogo_FormaPago)
    // {        
    //     $formapago = SatFormaPago::where('catalogo_FormaPago', $catalogo_FormaPago) ->delete();
    //     if($formapago){
    //         $data=[
    //             'status'=>'1',
    //             'msg'=>'success'
    //         ];
    //     }else{
    //         $data=[
    //             'status' => '0',
    //             'msg' => 'fail'
    //         ];
    //         return response()->json($data);
    //     }
    // }


    public function FormaPago_cambiarEstatus($catalogo_FormaPago)
    {        
        $formapagoActual = SatFormaPago::where('catalogo_FormaPago', $catalogo_FormaPago) -> first();
        // if($formapagoActual->status == 1){
        //     $formapagoActual->status = 0;
        // } else{
        //     $formapagoActual->status = 1;
        // }
        
        $formapago = SatFormaPago::where('catalogo_FormaPago', $catalogo_FormaPago) -> update(['status' => !$formapagoActual->status]);
       
            $data=[
                'status'=>$formapago,
                'msg'=>'update'
            ];       
            return response()->json($data);
    }
    
    // public function FormaPago_cambiarEstatus( Request $request )
    // {
    //     // return "hola";
    //     $formapago = SatFormaPago::where('status',$request->status)->update() ;
    //     return $formapago;
    // }

// ------------------------------CATALOGO MONEDA----------------------------------------------------
    public function CatalogoSat_Moneda_mostrar()
    {
        $monedita = SatMoneda::all();
        return \response($monedita);
    }
    public function CatalogoSat_Moneda_agregar(Request $request)
    {  
        try{
            // return "hola";
            $monedita = new SatMoneda();
            $monedita->fill($request->all());
            
            $monedita->save();
            return response($monedita, 200);
        } catch (\Exception $e) {
            //  return    response()->json([' error' .$e->getMessage()]);
            return response( "el catalogo Moneda Pago ya existe, ingrese uno diferente", 400);
        }   
    }

    public function CatalogoSat_Moneda_editar($id_Catalogo_Moneda, Request $request )
    {
        $moneda = SatMoneda::where('id_Catalogo_Moneda',$request->id_Catalogo_Moneda)->update($request->all()) ;
        return $moneda;
    }

    public function CatalogoSat_MonedacambiarEstatus($id_Catalogo_Moneda)
    {        
        $monedaActual = SatMoneda::where('id_Catalogo_Moneda', $id_Catalogo_Moneda) -> first();        
        $moneda = SatMoneda::where('id_Catalogo_Moneda', $id_Catalogo_Moneda) -> update(['status' => !$monedaActual->status]);
       
            $data=[
                'status'=>$moneda,
                'msg'=>'update'
            ];       
            return response()->json($data);
    }


    // ------------------------------Catálogo de tipos de comprobante.----------------------------------------------------
    public function CatalogoSat_TipoDeComprobante_mostrar()
    {
        $comprobante = SatTipoDeComprobante::all();
        return \response($comprobante);
    }
    public function CatalogoSat_TipoDeComprobante_agregar(Request $request)
    {  
        try{
            // return "hola";
            $comprobante = new SatTipoDeComprobante();
            $comprobante->fill($request->all());
            
            $comprobante->save();
            return response($comprobante, 200);
        } catch (\Exception $e) {
            return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
        }   
    }
    
    public function CatalogoSat_TipoDeComprobante_editar($id_TipoComprobante, Request $request )
    {
        $comprobante = SatTipoDeComprobante::where('id_TipoComprobante',$request->id_TipoComprobante)->update($request->all()) ;
        return $comprobante;
    }

    public function CatalogoSat_TipoDeComprobantecambiarEstatus($id_TipoComprobante)
    {        
        $estadoActual = SatTipoDeComprobante::where('id_TipoComprobante', $id_TipoComprobante) -> first();        
        $comprobante = SatTipoDeComprobante::where('id_TipoComprobante', $id_TipoComprobante) -> update(['status' => !$estadoActual->status]);
       
            $data=[
                'status'=>$comprobante,
                'msg'=>'update'
            ];       
            return response()->json($data);
    }
    
    // ------------------------------Catálogo de Exportacion.----------------------------------------------------
    public function CatalogoSat_Exportacion_mostrar()
    {
        $exporta = SatExportacion::all();
        return \response($exporta);
    }
    public function CatalogoSat_Exportacion_agregar(Request $request)
    {  
        try{
            // return "hola";
            $exporta = new SatExportacion();
            $exporta->fill($request->all());
            
            $exporta->save();
            return response($exporta, 200);
        } catch (\Exception $e) {
            return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
        }   
    }
    public function CatalogoSat_Exportacion_editar($id_Exportacion, Request $request )
    {
        $exporta = SatExportacion::where('id_Exportacion',$request->id_Exportacion)->update($request->all()) ;
        return $exporta;
    }
    public function CatalogoSat_ExportacioncambiarEstatus($id_Exportacion)
    {        
        $estadoActual = SatExportacion::where('id_Exportacion', $id_Exportacion) -> first();        
        $exporta = SatExportacion::where('id_Exportacion', $id_Exportacion) -> update(['status' => !$estadoActual->status]);
       
            $data=[
                'status'=>$exporta,
                'msg'=>'update'
            ];       
            return response()->json($data);
    }
    
    // ------------------------------Catálogo de MetodoPago.----------------------------------------------------
    public function CatalogoSat_MetodoPago_mostrar()
    {
        $mp = SatMetodoPago::all();
        return \response($mp);
    }
    public function CatalogoSat_MetodoPago_agregar(Request $request)
    {  
        try{
            // return "hola";
            $mp = new SatMetodoPago();
            $mp->fill($request->all());
            
            $mp->save();
            return response($mp, 200);
        } catch (\Exception $e) {
            return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
        }   
    }
    public function CatalogoSat_MetodoPago_editar($id_MetodoPago, Request $request )
    {
        $mp = SatMetodoPago::where('id_MetodoPago',$request->id_MetodoPago)->update($request->all()) ;
        return $mp;
    }
    public function CatalogoSat_MetodoPagocambiarEstatus($id_MetodoPago)
    {        
        $estadoActual = SatMetodoPago::where('id_MetodoPago', $id_MetodoPago) -> first();        
        $mp = SatMetodoPago::where('id_MetodoPago', $id_MetodoPago) -> update(['status' => !$estadoActual->status]);
       
            $data=[
                'status'=>$mp,
                'msg'=>'update'
            ];       
            return response()->json($data);
    }

    
     // ------------------------------Catálogo de Periodicidad.----------------------------------------------------
     public function CatalogoSat_Periodicidad_mostrar()
     {
         $periodicidad = SatPeriodicidad::all();
         return \response($periodicidad);
     }
     public function CatalogoSat_Periodicidad_agregar(Request $request)
     {  
         try{
             // return "hola";
             $periodicidad = new SatPeriodicidad();
             $periodicidad->fill($request->all());
             
             $periodicidad->save();
             return response($periodicidad, 200);
         } catch (\Exception $e) {
            return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
         }   
     }
     public function CatalogoSat_Periodicidad_editar($id_Periodicidad, Request $request )
     {
         $periodicidad = SatPeriodicidad::where('id_Periodicidad',$request->id_Periodicidad)->update($request->all()) ;
         return $periodicidad;
     }
     public function CatalogoSat_PeriodicidadcambiarEstatus($id_Periodicidad)
     {        
         $estadoActual = SatPeriodicidad::where('id_Periodicidad', $id_Periodicidad) -> first();        
         $periodicidad = SatPeriodicidad::where('id_Periodicidad', $id_Periodicidad) -> update(['status' => !$estadoActual->status]);
        
             $data=[
                 'status'=>$periodicidad,
                 'msg'=>'update'
             ];       
             return response()->json($data);
     }

       // ------------------------------Catálogo de Meses.----------------------------------------------------
       public function CatalogoSat_Mes_mostrar()
       {
           $mes = SatMeses::all();
           return \response($mes);
       }
       public function CatalogoSat_Mes_agregar(Request $request)
       {  
           try{
               // return "hola";
               $mes = new SatMeses();
               $mes->fill($request->all());
               
               $mes->save();
               return response($mes, 200);
           } catch (\Exception $e) {
                return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
           }   
       }
       public function CatalogoSat_Mes_editar($id_mes, Request $request )
       {
           $mes = SatMeses::where('id_mes',$request->id_mes)->update($request->all()) ;
           return $mes;
       }
       public function CatalogoSat_MescambiarEstatus($id_mes)
       {        
           $estadoActual = SatMeses::where('id_mes', $id_mes) -> first();        
           $mes = SatMeses::where('id_mes', $id_mes) -> update(['status' => !$estadoActual->status]);
          
               $data=[
                   'status'=>$mes,
                   'msg'=>'update'
               ];       
               return response()->json($data);
       }
       
         // ------------------------------Catálogo de Tipo de Relacion.----------------------------------------------------
         public function CatalogoSat_TipoRelacion_mostrar()
         {
             $tipoRelacion = SatTipoRelacion::all();
             return \response($tipoRelacion);
         }
         public function CatalogoSat_TipoRelacion_agregar(Request $request)
         {  
             try{
                 // return "hola";
                 $tipoRelacion = new SatTipoRelacion();
                 $tipoRelacion->fill($request->all());
                 
                 $tipoRelacion->save();
                 return response($tipoRelacion, 200);
             } catch (\Exception $e) {
                 //  return    response()->json([' error' .$e->getMessage()]);
                 
                 return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
             }   
         }
         public function CatalogoSat_TipoRelacion_editar($id_Relacion, Request $request )
         {
             $tipoRelacion = SatTipoRelacion::where('id_Relacion',$request-> id_Relacion)->update($request->all()) ;
             return $tipoRelacion;
         }
         public function CatalogoSat_TipoRelacioncambiarEstatus($id_Relacion)
         {        
             $estadoActual = SatTipoRelacion::where('id_Relacion', $id_Relacion) -> first();        
             $tipoRelacion = SatTipoRelacion::where('id_Relacion', $id_Relacion) -> update(['status' => !$estadoActual->status]);
            
                 $data=[
                     'status'=>$tipoRelacion,
                     'msg'=>'update'
                 ];       
                 return response()->json($data);
         }

          // ------------------------------Catálogo de Regimen Fiscal.----------------------------------------------------
          public function CatalogoSat_RegimenFiscal_mostrar()
          {
              $RegimenF = SatRegimenFiscal::all();
              return \response($RegimenF);
          }
          public function CatalogoSat_RegimenFiscal_agregar(Request $request)
          {  
              try{
                  // return "hola";
                  $RegimenF = new SatRegimenFiscal();
                  $RegimenF->fill($request->all());
                  
                  $RegimenF->save();
                  return response($RegimenF, 200);
              } catch (\Exception $e) {
                    return response( "el campo Catálogo Forma Pago ya existe, ingrese uno diferente", 400);
              }   
          }
          public function CatalogoSat_RegimenFiscal_editar($id_RegimenFiscal, Request $request )
          {
              $RegimenF = SatRegimenFiscal::where('id_RegimenFiscal',$request-> id_RegimenFiscal)->update($request->all()) ;
              return $RegimenF;
          }
          public function CatalogoSat_RegimenFiscalcambiarEstatus($id_RegimenFiscal)
          {        
              $estadoActual = SatRegimenFiscal::where('id_RegimenFiscal', $id_RegimenFiscal) -> first();        
              $RegimenF = SatRegimenFiscal::where('id_RegimenFiscal', $id_RegimenFiscal) -> update(['status' => !$estadoActual->status]);
             
                  $data=[
                      'status'=>$RegimenF,
                      'msg'=>'update'
                  ];       
                  return response()->json($data);
          }
         
}
