@extends('Supervisor.supervisorTablero')
@section ('tablero')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar nueva categoría</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('lista.index')}}"> Back</a>d
        </div>
    </div>
</div>

   
<form action="{{route('lista.store')}}" method="POST">
    @csrf

  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="categoria" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalles:</strong>
                <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Detalles"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </div>
   
</form>
@endsection