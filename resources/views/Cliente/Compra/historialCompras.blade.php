@extends('layouts.app')

@section('content')
    <br><br> <br>

    <div class="panel panel-container" >
			      
            <h4 ALIGN=CENTER>Mis productos Comprados </h4>
                
                <table  class="table table-striped " id="tablaProductos">
                    <tr >
                     <td  ALIGN=CENTER > <h4>No </h4> </td>
                     <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                     <td  ALIGN=CENTER > <h4>precio</h4></td>
                     <td  ALIGN=CENTER > <h4>Fecha de compra</h4></td>
                     <td  ALIGN=CENTER > <h4>vendido por:</h4></td>
                     <td  ALIGN=CENTER > <h4>Estatus de pago</h4></td>
                   </tr>
                  @foreach ($misCompras as $itemproducto) 
                  <tr>
                    <td  ALIGN=CENTER > <a href="{{route('ventas.show',$itemproducto->id_product)}}"> 
                      <h5>{{$itemproducto->id_product}} </h5> </a> </td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->producto->nombre}} </h5></td> 
                    <td  ALIGN=CENTER > <h5>${{$itemproducto->producto->precio}} </h5></td>
                    
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->created_at}}</h5></td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->producto->usuario->nombre}}</h5></td>
                    <td  ALIGN=CENTER > @if($itemproducto->producto->revision->id_revision==4)
                    <h5>Pagado</h5>
                    @elseif($itemproducto->producto->revision->id_revision==6)
                    <h5>Revisando pago</h5>
                    @elseif($itemproducto->producto->revision->id_revision==5)
                    <a href="{{route('Compras.edit',$itemproducto->id_ventas)}}" class="btn btn-success">Pagar</a>
                    @endif
                    
                    
                    </td>
                  </tr> 
                  @endforeach
                   

                </table> 
    </div>
     




@endsection