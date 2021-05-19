@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>creacion de productos</h4>

           
            <table  class="table table-striped table-sm">
 
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <h5>{{$producto->nombre}} </h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Imagen producto </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4"> <img src="{{Storage::url($producto->imagen)}}" class="card-img-top" alt="">  </td>
                </div>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <h5>${{$producto->precio}}</h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Categoría</h4></td>
                <td  ALIGN=CENTER > <h5> 

                  <span>{{$producto->categoria->categoria}}</span>

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> 
                  <h5>{{$producto->descripcion}}</h5>
                </td>
                
              </tr>
              <tr>
                <td  ALIGN=CENTER > <h4>Estatus</h4></td>
                <td  ALIGN=CENTER > 
                  <h5 class="bg-danger">{{$producto->revision->revisado}}</h5>
                </td>
                
              </tr>
			  <tr>
                <td  ALIGN=CENTER > <h4>Motivo</h4></td>
                <td  ALIGN=CENTER > 
                  <h5>{{$producto->motivo}}</h5>
                </td>
                
              </tr>

            </table>

           
       </div>     
     
@endsection