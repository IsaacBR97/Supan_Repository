@extends('layouts.app')

@section('content')

<br>
<br><br>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <form action="{{route('creaCompra',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
             <strong>Inserte tikect de compra para confirmar su confirmar su compra</strong>
             <br>
             <h4>Insertar</h4>
                <input type="file" name="pago">
                <button type="submit" class="btn btn-success">Enviar</button>
                <br>
                <button type="submit" class="btn btn-warning">pagar despues</button>

            </form>
            
            </div>
        </div>

        @endsection