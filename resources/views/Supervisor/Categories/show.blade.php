@extends('Supervisor.supervisorTablero')
@section ('tablero')
<div class="row">
    
            
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mostrar Categoría</h2>
            </div>
        </div>
</div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Detalles</th>
        </tr>
        <tr>
            <td>{{$idshow->id_categoria}}</td>
            <td>{{$idshow->categoria}}</td>
            <td>{{$idshow->descripcion}}</td>
        </tr>
    </table>
    



@endsection