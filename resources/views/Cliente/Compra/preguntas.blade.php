@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="panel panel-container">
			      
        <h4 ALIGN=CENTER>Producto</h4>

           
            <table  class="table table-striped table-sm">
 
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre de producto </h4></td>
                <td  ALIGN=CENTER> <h5>{{$producto->nombre}} </h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>imagen </h4></td>
                <td  ALIGN=CENTER>
                <div class="col-lg-4 col-md-6 mb-4"> <img src="{{Storage::url($producto->imagen)}}" class="card-img-top" alt="">  </td>
                </div>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                <td  ALIGN=CENTER>  <h5>${{$producto->precio}}</h5></td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > <h4>categoria </h4></td>
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
              
			  

            </table>
           
            <h4 ALIGN=CENTER>Preguntas</h4>
            <table  class="table table-striped table-sm">
 
            @foreach($preguntas as $itemPreguntas)
            <tr>
           
            <td  ALIGN=CENTER >  <h4>*{{$itemPreguntas->interesado->nombre}}: </h4>
           
            <p style="padding-left:60px;">{{$itemPreguntas->pregunta}} </p>
            </td>
            
            <td  ALIGN=CENTER>  <h5>Re: <br>{{$itemPreguntas->respuesta}}</h5>
            </td>
            @if($itemPreguntas->propietario == Auth::user()->id)
            <td  ALIGN=CENTER> <a href="{{route('Responder.edit',$itemPreguntas->id_preguntas)}}" class="btn btn-warning">responder</a></td>
           @endif
            </tr>
            @endforeach
            </table>
            @if($producto->id != Auth::user()->id)
                <a href="{{route('hacerPregunta',[$producto->id_product,Auth::user()->id])}}" class="btn btn-success">Hacer pregunta</a>
                @endif
       </div>     
     
@endsection