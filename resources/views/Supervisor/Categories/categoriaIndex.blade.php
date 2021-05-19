@extends('Supervisor.supervisorTablero')
@section ('tablero')

<div class="row">
    
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('lista.create')}}">Crear nueva categoría</a>
            </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CATEGORÍAS</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
           <th width="280px">Action</th>
        </tr>
        <tr>
        @foreach ($categoria as $itemCategory)
            <td>{{$itemCategory->id_categoria}}</td>
            <td>{{$itemCategory->categoria}}</td>
            <td>{{$itemCategory->descripcion}}</td>
            <td>
                 
   
                    <a class="btn btn-info d-inline"  href="{{route('lista.show',$itemCategory->id_categoria)}}">Show</a>
    
                    <a class="btn btn-primary d-inline" href="{{route('lista.edit',$itemCategory->id_categoria)}}">Edit</a>
                    <div  class="d-inline">
                    <form action=""  method="post" >
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea Eliminar la Categoria: {{$itemCategory->nombre}}?')"> Eliminar</button>
                        </form>
                        </div>
            </td>
        </tr>
        @endforeach
     
        </tr>
        
        
                </form>
            </td>
        </tr>
    
    </table>
    
    
  
@endsection