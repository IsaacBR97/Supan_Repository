<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreguntasModel;
use App\ProductosModel;
class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cliente');
    }
    public function index($id)
    {
        $producto = ProductosModel::find($id);
        $preguntas = PreguntasModel::where('id_product',$id)->get();
       return view('Cliente.Compra.preguntas',compact('preguntas','producto'));
     // return $preguntas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$interesado)
    {
        $producto = ProductosModel::find($id);
        return view('Cliente.Compra.hacerPregunta',compact('producto','interesado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $envioPregunta = PreguntasModel::create([
            'id_product' =>$request->producto,
            'id' => $request->interesado,
            'pregunta' => $request->pregunta,
            'propietario' => $request->propietario
        ]);
        return redirect()->route('indexPreguntas',$request->producto);
       
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
        $respuesta = PreguntasModel::find($id);
       return view('Cliente.Vendedor.responderPregunta',compact('respuesta'));
     //return $respuesta;
        
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
        //$respuesta = PreguntasModel::find($id);
       /* $respuesta->update([
            'respuesta' => $request->respuesta
        ]);
        return redirect()->route('indexPreguntas',$respuesta->id_product);*/
        return 'hola';
    }
    public function respuesta(Request $request, $id){
        $respuesta = PreguntasModel::find($id);
        $respuesta->update($request->all());
        return redirect()->route('indexPreguntas',$respuesta->id_product);
       
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
