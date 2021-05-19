@extends('Encargado.encargadoTablero')
@section ('tablero')

<div class="row">
    
          
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CATEGORÍAS</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
    @foreach($catalogo as $intemCat)
    <tr>
    <th colspan="4">{{$intemCat->categoria}}</th>
    </tr>
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Dscripcion</th>
            <th>fecha de publicacion</th>
           <th width="280px">Estatus</th>
        </tr>
        
        @foreach($producto as $itemProduct)
        @if($itemProduct->id_categoria == $intemCat->id_categoria )
        <tr>
            <td>{{$itemProduct->id_product}}</td>
            <td>{{$itemProduct->nombre}}</td>
            <td>{{$itemProduct->descripcion}}</td>
            <td>{{$itemProduct->created_at}}</td>
            <td>{{$itemProduct->revision->revisado}}</td>
            </tr>
       
            @endif
            @endforeach
       
     
    @endforeach
    </table>
    
    
  
@endsection