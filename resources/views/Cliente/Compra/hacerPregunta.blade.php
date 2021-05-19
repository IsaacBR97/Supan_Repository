@extends('layouts.app')

@section('content')

<br>
<br><br>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <form action="{{route('enviarPregunta')}}" methot="post">
                    @csrf
                 
             <strong>Escribir pregunta:</strong>
             <br>
            <input type="hidden" name="producto" value="{{$producto->id_product}}">
            <input type="hidden" name="interesado" value="{{$interesado}}">
            <input type="hidden" name="propietario" value="{{$producto->id}}">
             <textarea class="form-control" style="height:150px"  name="pregunta" placeholder="Escribir..."></textarea>
         <button type="submit" class="btn btn-success">Enviar</button>
            </form>
            </div>
        </div>

        @endsection