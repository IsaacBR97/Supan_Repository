<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\CategoryModel;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        
    }
    public function busquedaProductos($product){
       $productos = ProductosModel::where("id_categoria","like",$product."%")->where('id_revision',2)->take(500)->get();
       $categorias = CategoryModel::all();
       $categoria = CategoryModel::find($product);
       return view('home',compact('productos','categorias','categoria'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = CategoryModel::all();
        return view('Cliente.Vendedor.createProductos',compact('categoria'));
    }

    public function misProductos(){
        $misProductos = ProductosModel::where('id',Auth()->user()->id)->get();
        return view('Cliente.Vendedor.indexProductos',compact('misProductos'));
    }
    public function barraSearch(Request $request){
        
        $productos = ProductosModel::where("nombre","like",$request->buscar."%")->where('id_revision',2)->take(1)->get();
     return view('buscarProducto.encontrarProducto',compact('productos')); 
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen= $request->imagen->getClientOriginalName();
         
        $imagen= ProductosModel::create([
            'nombre'=> $request->nombre,
            'imagen'=>$request->file('imagen')->storeAs('public/imagenesProductos',$imagen),
            'precio'=>$request->precio,
            'id_categoria'=>$request->id_categoria,
            'descripcion'=>$request->descripcion,
            'id' => $request->claveUser,
            'id_revision'=> 1,
            ]);
            return redirect()->route('misProductos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function procutoRechazado($id){
        $producto = ProductosModel::find($id);
   
        return view('Cliente.Vendedor.productoRechazado',compact('producto'));
    }
    public function show($id)
    {
        $producto = ProductosModel::find($id);
   
            return view('producto',compact('producto'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoEdit = ProductosModel::find($id);
        $categoria = CategoryModel::all();
        return view('Cliente.Vendedor.editarProducto',compact('productoEdit','categoria'));
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
        if(!isset($request->imagen)){
            $editaProducto = ProductosModel::find($id);
            $editaProducto->update([
               'nombre'=> $request->nombre,
               'precio'=>$request->precio,
               'id_categoria'=>$request->id_categoria,
               'descripcion'=>$request->descripcion,
               'id' => $request->claveUser,
               'id_revision'=> 1,
               ]);
               return redirect()->route('misProductos');
        }
        
       else{
        
            $imagen= $request->imagen->getClientOriginalName();
            $editaProducto = ProductosModel::find($id);
            $editaProducto->update([
               'nombre'=> $request->nombre,
               
               'imagen'=>$request->file('imagen')->storeAs('public/imagenesProductos',$imagen),
               'precio'=>$request->precio,
               'id_categoria'=>$request->id_categoria,
               'descripcion'=>$request->descripcion,
               'id' => $request->claveUser,
               'id_revision'=> 1,
               ]);
               return redirect()->route('misProductos');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productoEliminar = ProductosModel::find($id);
        $productoEliminar->delete();
        return redirect()->route('misProductos');
    }
}
