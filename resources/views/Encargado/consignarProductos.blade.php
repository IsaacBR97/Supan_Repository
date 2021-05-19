@extends('Encargado.encargadoTablero')
@section ('tablero')

   <br>

    <div class="panel panel-container" >
			      
            <h4 ALIGN=CENTER>Productos en espera </h4>
                
                <table  class="table table-striped " id="tablaProductos">
                    <tr >
                     <td  ALIGN=CENTER > <h4>No </h4> </td>
                     <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                     <td  ALIGN=CENTER > <h4>precio</h4></td>
                     <td  ALIGN=CENTER > <h4>Estatus</h4></td>
                     <td  ALIGN=CENTER > <h4>Fecha de registro</h4></td>
                     <td  ALIGN=CENTER > <h4>Acciones</h4></td>
                   </tr>
                  @foreach ($productos as $itemproducto) 
                  <tr>
                    <td  ALIGN=CENTER > <a href="{{route('ventas.show',$itemproducto->id_product)}}"> 
                      <h5>{{$itemproducto->id_product}} </h5> </a> </td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->nombre}} </h5></td> 
                    <td  ALIGN=CENTER > <h5>${{$itemproducto->precio}} </h5></td>
                    <td  ALIGN=CENTER >  <h5 >{{$itemproducto->revision->revisado}}   </h5></td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->created_at}}</h5></td>
                    
                    <td  ALIGN=CENTER >
                 
                     <a  class="btn btn-warning" href="{{route('consignas.show',$itemproducto->id_product)}}">ver</a>
                    
                    
                  </tr> 
                  @endforeach
                   

                </table> 
    </div>
    @endsection