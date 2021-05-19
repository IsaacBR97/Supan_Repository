@extends('Supervisor.supervisorTablero')
@section ('tablero')
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form action="{{route('updateUsuario',$encontrar->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{$encontrar->id}}
        <div class="panel panel-default">
          <div class="form-group">
           <label for="imagen">Imagen del usuario:</label>
           <input type="file" name="imagen" id="imagen">
           <img src="{{asset('Storage::url($encontrar->fotoUrl)')}}" alt="">
          </div>
        </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Información del usuario</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" name="nombre"class="form-control" value="{{$encontrar->nombre}}">
            </div>
          </div>
         <div class="form-group">
            <label class="col-sm-2 control-label">Apellido Paterno</label>
            <div class="col-sm-10">
              <input type="text" name="apellidoP" class="form-control" value="{{$encontrar->apellidoP}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Apellido Materno</label>
            <div class="col-sm-10">
              <input type="text" name="apellidoM" class="form-control" value="{{$encontrar->apellidoM}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Correo electrónico</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" value="{{$encontrar->email}}">
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Cargo</h4>
        </div>
        <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Rol</label>
            <div class="col-sm-10">
               
              <select name="id_rol" class="form-control">
              
              <option value="{{$encontrar->id_rol}}">{{$encontrar->rolsUser->rol}}</option>
              @foreach ($rol as $itemRol)
                <option value="{{$itemRol->id_rol}}">{{$itemRol->rol}}</option>
              @endforeach
              </select>
              
            </div>
          </div>
        </div>
      </div>

 
        <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" class="btn btn-primary">Editar</button>
              <button type="reset" class="btn btn-default">Cancelar</button>
        </div>  
    </div>
    </form>
  </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	

</script>
</body>

@endsection