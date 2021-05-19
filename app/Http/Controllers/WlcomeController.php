<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\CategoryModel;
class WlcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = ProductosModel::where('id_revision', '=',2)->get();
        $categorias = CategoryModel::all();
        return view('welcome',compact('productos','categorias'));
    }
    public function busquedaProductosWl($product){
        $productos = ProductosModel::where("id_categoria","like",$product."%")->where('id_revision',2)->take(500)->get();
        $categorias = CategoryModel::all();
        $categoria = CategoryModel::find($product);
        return view('welcome',compact('productos','categorias','categoria'));
     }
     public function barraSearchWl(Request $request){
        
        $productos = ProductosModel::where("nombre","like",$request->buscar."%")->where('id_revision',2)->take(1)->get();
     return view('buscarProducto.buscarProducto',compact('productos')); 
   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
