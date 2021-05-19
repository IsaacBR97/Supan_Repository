@extends('layouts.app')

@section('content')
    <br> <br><br>

    <div class="panel panel-container" >
			      
            <h4 ALIGN=CENTER>Mis productos vendidos </h4>
                
                <table  class="table table-striped " id="tablaProductos">
                    <tr >
                     <td  ALIGN=CENTER > <h4>No </h4> </td>
                     <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                     <td  ALIGN=CENTER > <h4>precio</h4></td>
                     <td  ALIGN=CENTER > <h4>Fecha de venta</h4></td>
                     <td  ALIGN=CENTER > <h4>Comprado por:</h4></td>
                     <td  ALIGN=CENTER > <h4>Estatus de pago</h4></td>
                   </tr>
                  @foreach ($misVentas as $itemproducto) 
                  <tr>
                    <td  ALIGN=CENTER > <a href="{{route('ventas.show',$itemproducto->id_product)}}"> 
                      <h5>{{$itemproducto->id_product}} </h5> </a> </td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->producto->nombre}} </h5></td> 
                    <td  ALIGN=CENTER > <h5>${{$itemproducto->producto->precio}} </h5></td>
                    
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->created_at}}</h5></td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->comprador->nombre}}</h5></td>
                    <td  ALIGN=CENTER > 
                    @if($itemproducto->producto->id_revision == 4)
                      <h5>Pagado</h5>
                    @endif
                    </td>
                  </tr> 
                  @endforeach
                   

                </table> 
    </div>
     




@endsection