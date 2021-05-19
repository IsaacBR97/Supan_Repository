@extends('Encargado.encargadoTablero')
@section ('tablero')

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <form action="{{route('motivo',$id)}}" methot="post">
                    @csrf
                   @method('PUT')
             <strong>Motivo del rechazo:</strong>
             <textarea class="form-control" style="height:150px"  name="motivo" placeholder="Detalles"></textarea>
    <button type="submit" class="btn btn-success">Enviar</button>
            </form>
            </div>
        </div>
@endsection