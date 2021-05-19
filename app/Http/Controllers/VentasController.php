<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\CategoryModel;
use App\VentasModel;
class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
    }
    
    public function misVentas(){
     $misVentas =  VentasModel::where('vendedor',Auth()->user()->id)->get();
      return view('Cliente.Vendedor.historialVentas',compact('misVentas'));
    }
    public function misCompras(){
        $misCompras =  VentasModel::where('id',Auth()->user()->id)->get();
      return view('Cliente.Compra.historialCompras',compact('misCompras'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $compra = ProductosModel::find($id);
        return view('Cliente.Compra.vistaPreviaProducto',compact('compra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pago($id){
    return view('Cliente.Compra.pagoCompra',compact('id'));
    }
    public function store(Request $request, $id)
    {
        
       
            if(!isset($request->pago)){
                $confirCompra = ProductosModel::find($id);
                $crearCompra = VentasModel::create([
                    'id_product' => $confirCompra->id_product,
                    'vendedor' => $confirCompra->id,
                    'id' => Auth()->user()->id,
                    'total' => $confirCompra->precio,
                ]);
                $confirCompra->update([
                    'id_revision' => 5
                ]);
                return redirect()->route('misCompras');}
                else{
    
                    $imagen= $request->pago->getClientOriginalName();
                   $confirCompra = ProductosModel::find($id);
                    $crearCompra = VentasModel::create([
                        'id_product' => $confirCompra->id_product,
                        'vendedor' => $confirCompra->id,
                        'id' => Auth()->user()->id,
                        'total' => $confirCompra->precio,
                        'pago'=> $request->file('pago')->storeAs('public/imagenesPagos',$imagen),
                    ]);
                    $confirCompra->update([
                        'id_revision' => 6
                    ]);
                    return redirect()->route('misCompras');
                   
                }
        
        
        
          
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = VentasModel::find($id);
        return view('Cliente.Compra.postPago',compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imagen = $request->pago->getClientOriginalName();
        $compra = VentasModel::find($id);
        $compra->update([
            'pago' =>  $request->file('pago')->storeAs('public/imagenesPagos',$imagen),
        ]);
        $producto = ProductosModel::find($compra->producto->id_product);
        $producto->update([
            'id_revision' =>6
        ]);
        return redirect()->route('misCompras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
