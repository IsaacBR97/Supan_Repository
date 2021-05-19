@extends('Supervisor.supervisorTablero')
@section ('tablero')
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
	<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">{{$ventasTotal}}</div>
							<div class="text-muted">Transacciones</div>
							<a href="#" class="btn btn-primary">Revisar</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">{{$preguntasTotal}}</div>
							<div class="text-muted">Preguntas</div>
							<a href="#" class="btn btn-primary">Revisar</a>
 
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">{{$usuarioRegister}}</div>
							<div class="text-muted">Usuarios registrados</div>
							<a href="{{route('usuariosRegistrados')}}" class="btn btn-primary">Revisar</a>
 
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">{{$propuestas}}</div>
							<div class="text-muted">Propuestas</div>
							<a href="{{route('lista.index')}}" class="btn btn-primary">Revisar</a>
 
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
                @endsection