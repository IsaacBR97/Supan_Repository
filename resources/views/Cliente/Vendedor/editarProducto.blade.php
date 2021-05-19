@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>creacion de productos</h4>

            <form action="{{route('ventas.update',$productoEdit->id_product)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
            <table  class="table table-striped table-sm">
 
            <input type="hidden" name="claveUser"  value="{{Auth::user()->id}}" id="">
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <input type="text" name="nombre" value="{{$productoEdit->nombre}}"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen producto </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4"> <img src="{{Storage::url($productoEdit->imagen)}}" class="card-img-top" alt=""> <input type="file" name="imagen" > </td>
                </div>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <input type="text" name="precio" value="{{$productoEdit->precio}}"></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 

                  <select name="id_categoria" >
                  <option value="{{$productoEdit->id_categoria}}">{{$productoEdit->categoria->categoria}}</option>
                    @foreach($categoria as $itemCategory)
                    <option value="{{$itemCategory->id_categoria}}">{{$itemCategory->categoria}}</option>
                    
                    @endforeach
                   </select> </h5>

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> 
                  <textarea name="descripcion" id="" cols="30" rows="3">{{$productoEdit->descripcion}}</textarea>
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