<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\CategoryModel;
use App\User;
use Illuminate\Support\Facades\Hash;
class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('encargado');
    }
    public function index()
    {
       $productos = ProductosModel::where('id_revision',1)->get();
       return view('Encargado.consignarProductos',compact('productos'));
    }

    public function categorias(){
        $catalogo = CategoryModel::all();
        $producto = ProductosModel::all();
    return view('Encargado.categoriaProductos',compact('catalogo','producto'));
    }
    
    public function restablecerContraseña(){
        $usuarios = User::where('id','!=',Auth()->user()->id)->where('id_rol','!=',4)->get();
        return view('Encargado.usuarios',compact('usuarios'));
    }

    public function password($id){
        $password = User::find($id);
        return view('Encargado.editPassword',compact('password'));
    }
    public function cambiar($id){
       

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
        $verProducto = ProductosModel::find($id);
        return view('Encargado.verProducto',compact('verProducto'));
    }
    public function aceptarProducto($id){
        $productosCaeptados = ProductosModel::find($id);
        $productosCaeptados->update([
            'id_revision' => 2
        ]);
            return redirect()->route('consignas.index');
    }
    public function rechazarProducto($id){
        
        return view('Encargado.motivo',compact('id'));
    }

    public function motivo(Request $request,$id){
      $productoRechazado = ProductosModel::find($id);
        $productoRechazado->update([
            'id_revision' => 3,
            'motivo' => $request->motivo,
        ]);
            return redirect()->route('consignas.index');
         
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
        /* $restablecer = User::find($id);
        $this->Validate( $request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $restablecer->update([
            'password' => Hash::make($request->password),
        ]);*/
        return 'hola';
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
