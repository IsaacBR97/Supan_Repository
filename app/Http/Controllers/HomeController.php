<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductosModel;
use App\CategoryModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cliente');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $productos = ProductosModel::where('id_revision', '=',2)->get();
        $categorias = CategoryModel::all();
        
        return view('home',compact('productos','categorias'));
     // return $productos;
    }
}
