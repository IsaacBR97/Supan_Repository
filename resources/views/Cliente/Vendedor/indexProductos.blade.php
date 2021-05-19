@extends('layouts.app')

@section('content')
    

<!--barra buscar-->
<br>
    <div class="col-8">
      <div class="input-group">
          <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre">
          <div class="input-group-append"><span class="input-group-text">Buscar</span></div>
      </div>
      <div id="resultados" class="bg-light border"></div>
   </div>
   <br>

    <div class="panel panel-container" >
			      
            <h4 ALIGN=CENTER>Mis productos </h4>
                
                <table  class="table table-striped " id="tablaProductos">
                    <tr >
                     <td  ALIGN=CENTER > <h4>No </h4> </td>
                     <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                     <td  ALIGN=CENTER > <h4>precio</h4></td>
                     <td  ALIGN=CENTER > <h4>Estatus</h4></td>
                     <td  ALIGN=CENTER > <h4>Fecha de registro</h4></td>
                     <td  ALIGN=CENTER > <h4>Preguntas</h4></td>
                     <td  ALIGN=CENTER > <h4>Acciones</h4></td>
                   </tr>
                  @foreach ($misProductos as $itemproducto) 
                  <tr>
                    <td  ALIGN=CENTER > <a href="{{route('ventas.show',$itemproducto->id_product)}}"> 
                      <h5>{{$itemproducto->id_product}} </h5> </a> </td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->nombre}} </h5></td> 
                    <td  ALIGN=CENTER > <h5>${{$itemproducto->precio}} </h5></td>
                    <td  ALIGN=CENTER >
                    @if($itemproducto->id_revision == 3)
                     <h5 class="bg-danger">{{$itemproducto->revision->revisado}} 
                     @elseif($itemproducto->id_revision == 2)
                     <h5 class="bg-success">{{$itemproducto->revision->revisado}} 
                     @elseif($itemproducto->id_revision == 1)
                     <h5 >{{$itemproducto->revision->revisado}} 
                     @elseif($itemproducto->id_revision == 4)
                     <h5 class="bg-success">{{$itemproducto->revision->revisado}} 
                     @endif
                     </h5></td>
                    <td  ALIGN=CENTER > <h5>{{$itemproducto->created_at}}</h5></td>
                    <td  ALIGN=CENTER > <h5>|--| </td>
                    <td  ALIGN=CENTER >
                    @if($itemproducto->id_revision == 1)
                     <a  class="btn btn-warning" href="{{route('ventas.edit',$itemproducto->id_product)}}">Editar</a>
                    @elseif($itemproducto->id_revision == 2)
                    <a  class="btn btn-success" href="{{route('ventas.show',$itemproducto->id_product)}}">ver</a>
                    @elseif($itemproducto->id_revision == 3)
                   
                   
                       <a  class="btn btn-danger" href="{{route('procutoRechazado',$itemproducto->id_product)}}">ver</a>
                    
                      <form action="{{route('ventas.destroy',$itemproducto->id_product)}}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                      <button class="btn btn-danger" type="submit">eliminar</button>
                      </form>
                    </td>
                    @endif
                    
                  </tr> 
                  @endforeach
                   

                </table> 
    </div>
     


<script>
  window.addEventListener('load',function(){
     document.getElementById("texto").addEventListener("keyup", () => {
         if((document.getElementById("texto").value.length)>=1)
             fetch(`/nombres/buscador?texto=${document.getElementById("texto").value}`,{ method:'get' })
             .then(response  =>  response.text() )
             .then(html      =>  {   document.getElementById("resultados").innerHTML = html  })
         else
             document.getElementById("tablaProductos").innerHTML = ""
     })
 }); 
</script>

@endsection