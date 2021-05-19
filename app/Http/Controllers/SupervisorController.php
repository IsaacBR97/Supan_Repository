<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\RolModel;
use App\ProductosModel;
use App\PreguntasModel;
use App\CategoryModel;
use App\VentasModel;
class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('supervisor');
    }
    public function index()
    {
       $propuestas = ProductosModel::all()->count();
       $usuarioRegister = User::where('id','!=',Auth()->user()->id)->get()->count();
       $preguntasTotal   = PreguntasModel::all()->count();
       $ventasTotal = VentasModel::all()->count();
       return view('Supervisor.indexsup',compact('propuestas','usuarioRegister','preguntasTotal','ventasTotal'));
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
    public function usuariosRegt(){
        $usuario = User::where('id','!=',Auth()->user()->id)->get();
        return view('Supervisor.Usuarios.usuariosLista',compact('usuario'));
       
    }
    public function editarUsuario($id){

        $encontrar = User::find($id);
        $rol = RolModel::all();
        return view('Supervisor.Usuarios.edit',compact('encontrar','rol'));
        
    }

    public function updateUsuario(Request $request,$id){
        $encontrarUs=User::find($id);
        $encontrarUs->update($request->all());
        return redirect()->route('usuariosRegistrados');
       

    }

    public function catalogo(){
            $catalogo = CategoryModel::all();
            $producto = ProductosModel::all();
        return view('Supervisor.Catalogo.catalogo',compact('catalogo','producto'));
    }

    public function pagos(){
        $revisaPagos = VentasModel::where('pago','!=',NULL)->get();
        return view('Supervisor.pagosLista',compact('revisaPagos'));
      
    }
    public function revisarPago($id){
        $revisaPagos = VentasModel::find($id);
        return view('Supervisor.revisarPago',compact('revisaPagos'));
    }
  public function aceptar(Request $request,$id)
    {
       $aceptar = VentasModel::find($id);
       $producto = ProductosModel::find($aceptar->id_product);
       $producto->update([
        'id_revision'=> 4
       ]);
       return redirect()->route('pagos');
    }
    public function agregaProducto(){
        $categoria = CategoryModel::all();
        return view('Supervisor.crearProducto',compact('categoria'));
    }
    public function agregandoProducto(Request $request){
        $imagen= $request->imagen->getClientOriginalName();
         
        $imagen= ProductosModel::create([
            'nombre'=> $request->nombre,
            'imagen'=>$request->file('imagen')->storeAs('public/imagenesProductos',$imagen),
            'precio'=>$request->precio,
            'id_categoria'=>$request->id_categoria,
            'descripcion'=>$request->descripcion,
            'id' => $request->claveUser,
            'id_revision'=> 2,
            ]);

         return redirect()->route('Supervisor.index');
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
