@extends('layouts.app')

@section('content')

<br>
<br><br>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <form action="{{route('enviasRespuesta',$respuesta->id_preguntas)}}" methot="Post">
            @csrf
    @method('PUT')
             <strong>Escribir Respuesta:</strong>
             <br>
             <strong> Pregunta:</strong>
            
             <p style="padding-left:60px;"> *{{$respuesta->pregunta}} </p>
             <textarea class="form-control" style="height:150px"  name="respuesta" placeholder="Escribir..."></textarea>
         <button type="submit" class="btn btn-success">Enviar</button>
            </form>
            </div>
        </div>

        @endsection