@extends('layouts.appProducto')
@section('title', 'editar producto')

@section('content')
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER> Editar productos</h4>
        <form action="{{route('productos.update',$idEdit->id)}}" method="POST">
          @csrf
          @method('PUT')
            <table  class="table table-striped table-sm">
             
                
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <input type="text" value="{{$idEdit->nombre}}" name="nombre"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER> <input type="text" value="{{$idEdit->precio}}" name="precio"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 
                  <select name="categoria" >
                    <option value="{{$idEdit->categoria}}" >electrodemesticos</option>
                    <option>ropa</option>
                    <option>electronica</option>
                   </select> </h5>
                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td ALIGN=CENTER >  
                  
                <textarea name="descripcion"  cols="30" rows="3"> {{$idEdit->descripcion}}</textarea>
               </td>
              </tr>

            
            </table>

            <div ALIGN=CENTER>
                <input type="submit" name="editar" value= "Guardar"
                style="color: white; background-color: green"> 
            </div>

        </form>
    </div>
@endsection