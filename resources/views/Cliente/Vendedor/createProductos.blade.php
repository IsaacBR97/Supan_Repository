@extends('layouts.app')

@section('content')
<br><br><br> 
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>creacion de productos</h4>

            <form action="{{route('ventas.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

            <table  class="table table-striped table-sm">
 
            <input type="hidden" name="claveUser"  value="{{Auth::user()->id}}" id="">
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <input type="text" name="nombre"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen producto </h4></td>
                <td  ALIGN=CENTER> <input type="file" name="imagen"> </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER> $ <input type="text" name="precio"></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 

                  <select name="id_categoria" >
                    @foreach($categoria as $itemCategory)
                    <option value="{{$itemCategory->id_categoria}}">{{$itemCategory->categoria}}</option>
                    
                    @endforeach
                   </select> </h5>

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> 
                  <textarea name="descripcion" id="" cols="30" rows="3"></textarea>
                </td>
                
              </tr>


            </table>

            <div ALIGN=CENTER>
                <button type="submit" class="btn btn-success">Proponer</button>   
            </div>

          </form>
       </div>     
     
@endsection