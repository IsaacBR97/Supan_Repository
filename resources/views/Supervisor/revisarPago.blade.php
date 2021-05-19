@extends('Supervisor.supervisorTablero')
@section ('tablero')

<br><br><br>
    
    <div class="panel panel-container" >
			      
        <h4 ALIGN=CENTER>Producto</h4>

           
            <table  class="table table-striped table-sm">
 
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <h5>{{$revisaPagos->producto->nombre}} </h5></td>
              </tr>

              

              <tr>
                <td  ALIGN=CENTER > <h4>Ticket </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4"> <img src="{{Storage::url($revisaPagos->pago)}}"  width="300px" class="card-img-top" alt="">  </td>
                </div>
              </tr>


            </table>
           
   <a href="{{route('aceptar',$revisaPagos->id_ventas)}}" class="btn btn-success">Aceptar</a>
           
           
       </div>     

@endsection