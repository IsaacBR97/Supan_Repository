@extends('Encargado.encargadoTablero')
@section ('tablero')
<br><br><br>
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>Vista del Producto</h4>

           
            <table  class="table table-striped table-sm">
 
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <h5>{{$verProducto->nombre}} </h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen del Producto </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4 " > 
                <img src="{{Storage::url($verProducto->imagen)}}" class="img-thumbnail" alt="Eniun">  </td>
                </div>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <h5>${{$verProducto->precio}}</h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 

                  <span>{{$verProducto->categoria->categoria}}</span>

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> 
                  <h5>{{$verProducto->descripcion}}</h5>
                </td>
                
              </tr>
              <tr>
                <td  ALIGN=CENTER > <h4>Status</h4></td>
                <td  ALIGN=CENTER > 
                  <h5 >{{$verProducto->revision->revisado}}</h5>
                </td>
                
              </tr>
              <tr>
                <td  ALIGN=CENTER > </td>
                <td  ALIGN=CENTER > 
                <a href="{{route('aceptarProducto',$verProducto->id_product)}}" class="btn btn-success">Aceptar</a>
                <a href="{{route('rechazarProducto',$verProducto->id_product)}}" class="btn btn-danger">Rechazar</a>
                </td>
                
              </tr>

            </table>
       </div>   
       
       @endsection