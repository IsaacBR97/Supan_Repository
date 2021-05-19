@extends('Supervisor.supervisorTablero')
@section ('tablero')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="#"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{route('lista.update',$encontrar->id_categoria)}}" method="POST">
        @csrf
        @method('PUT')
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{$encontrar->categoria}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalles:</strong>
                    <textarea class="form-control" style="height:150px" value="" name="descripcion" placeholder="Detail">{{$encontrar->descripcion}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </div>
   
    </form>
@endsection