@extends('Supervisor.supervisorTablero')
@section ('tablero')

<div class="row">
    
           
    <table class="table table-bordered">
    <table  class="table "  id="tablaAll">
        <thead>
        <tr>
            <th>No</th>
            <th>Nombre prducto</th>
            <th>Comprador</th>
            <th>Correo</th>
           <th width="280px">Pago</th>
        </tr>
        </thead>
        <tbody>
       
     @foreach ($revisaPagos as $itemPagos)
     <tr>
            <td>{{$itemPagos->id_ventas}}</td>
            <td>{{$itemPagos->producto->nombre}}</td>
            <td>{{$itemPagos->comprador->nombre}}</td>
            <td>{{$itemPagos->comprador->email}}</td>
            <td>
            <a href="{{route('revisarPago',$itemPagos->id_ventas)}}" class="btn btn-warning">Revisar</a>
            </td>
            </tr>
       @endforeach
     
       </tbody>
    
    </table>
    
    
  
@endsection