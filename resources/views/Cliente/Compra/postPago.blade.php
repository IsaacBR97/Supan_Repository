@extends('layouts.app')

@section('content')

<br>
<br><br>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <form action="{{route('Compras.update',$compra->id_ventas)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
             <strong>Inserte tikect de compra para confirmar su pago</strong>
             <br>
             <h4>Insertar</h4>
                <input type="file" name="pago">
                <button type="submit" class="btn btn-success">Enviar</button>
                <br>
                <a href="{{route('misCompras')}}" class="btn btn-warning">regresar</a>

            </form>
            
            </div>
        </div>

        @endsection