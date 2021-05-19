@extends('Encargado.encargadoTablero')
@section ('tablero')
<div class="panel panel-default">
<form action="'{{route('consignas.update',$password->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="panel-heading">
        <h4 class="panel-title">Editar contraseña</h4>
        </div>
        <div class="panel-body">
        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  name="password" >

                                
                            </div>
                        </div>
         
          <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>
          <div class="col-md-6">
              <input  type="password"  name="password_confirmation" >
             </div>
              </div>
              <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" class="btn btn-primary" href="">Crear</button>
            </div> 
              </div>
            
   </form>
</div>

@endsection