<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatFormaPago;

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

}
