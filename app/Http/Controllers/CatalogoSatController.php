<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatFormaPago;
use App\Models\SatMoneda;
use App\Models\SatTipoDeComprobante;


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
            //  return    response()->json([' error' .$e->getMessage()]);
            return response( $e);
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

}
