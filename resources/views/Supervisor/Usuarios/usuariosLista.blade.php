@extends('Supervisor.supervisorTablero')
@section ('tablero')


<div class="row">
<div class="col-lg-12">
				<h1 class="page-header">Control de usuarios</h1>
			</div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('usuarios.create')}}"> Crear Usuario</a>
            </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0"></h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">id</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Nombre</th>
                      <!--<th scope="col" class="border-0 text-uppercase font-medium">Apellido Paterno</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Apellido Materno</th>-->
                      <th scope="col" class="border-0 text-uppercase font-medium">Correo</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Rol</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($usuario as $itemUsuario)
                    <tr>
                      <td class="pl-4">{{$itemUsuario->id}}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{$itemUsuario->nombre}}</h5>
                      </td>
                     <!-- <td>
                      <h5 class="font-medium mb-0">{{$itemUsuario->a_paterno}}</h5>
                      </td>
                      <td>
                      <h5 class="font-medium mb-0">{{$itemUsuario->a_materno}}</h5>
                      </td>-->
                      <td>
                      <h5 class="font-medium mb-0">{{$itemUsuario->email}}</h5>
                      </td>
                      <td>
                      <h5 class="font-medium mb-0">{{$itemUsuario->rolsUser->rol}}</h5>
                      </td>
                      <td>
                        <a class="btn btn-info" href="{{route('usuarios.show',$itemUsuario->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('editarUsuario',$itemUsuario->id)}}">Edit</a>
                        <form action=""class="{{route('usuarios.destroy',$itemUsuario->id)}}" method="post" >
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger"> Eliminar</button>
                        </form>
                        
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
@endsection