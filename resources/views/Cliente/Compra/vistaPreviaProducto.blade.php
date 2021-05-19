@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="panel panel-container" >
			      
        <h4 ALIGN=CENTER>Producto</h4>

           
            <table  class="table table-striped table-sm">
 
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <h5>{{$compra->nombre}} </h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen del producto </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4"> <img src="{{Storage::url($compra->imagen)}}" class="card-img-top" alt="">  </td>
                </div>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <h5>${{$compra->precio}}</h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
                <td  ALIGN=CENTER > <h5> 

                  <span>{{$compra->categoria->categoria}}</span>

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Descripción</h4></td>
                <td  ALIGN=CENTER> 
                  <h5>{{$compra->descripcion}}</h5>
                </td>
                
              </tr>
              
			  

            </table>
           
            <a href="{{route('pago',$compra->id_product)}}" class="btn btn-success">Confirmar</a>
           <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a> 
           
           
       </div>     
     
@endsection