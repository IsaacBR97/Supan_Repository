<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Oportunidades SUPAN</title>
  <link rel="icon"  href="{{asset('img/logotec_300.png')}}">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
   <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}" ></script>
  <!-- Custom styles for this template -->
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">
</head>

<body class="antialiased">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="">Oportunidades SUPAN</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <form method="get" action="" target="_blank">
            <input type="search" id="buscar"  style="width: 500px; height: 30px; margin-left: 90px"placeholder="Buscar productos y más..." autofocus required>
            
            </form>

            <ul class="navbar-nav ml-auto">       
            
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                
                    
                            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div> 
                            </li>
                        @endguest
                    </ul>
                    
                  
                </div>
            </ul>
        </div>
    </nav>  
    <!-- Contenido de la pagina -->
        <div class="container">

                <div class="row">
                <div class="col-lg-3"><br>
                    <br><br>
                    <img class=" img-fluid" src="{{asset('img/Oportunidades.jpg')}}">

                    <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-close">
                        <a href="#" class="navbar-dark bg-navy nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categorias
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                       
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            @foreach($categorias as $itemCategoria)
                                <a href="{{route('buscar',$itemCategoria->id_categoria)}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$itemCategoria->categoria}}</p>
                                </a>
                                
                    @endforeach
                            </li>
                        
                        </ul>
                    </li>
                </ul>
                
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h1 class="card-title">Bienvenido!</h1><br><br>
                        <h6 class="card-subtitle mb-2 text-muted">Gracias por entrar a Oportunidades Supan</h6>
                        <p class="card-text">Si te registras, podrás realizar compras de cualquiera de los productos disponibles que ves aqui, ademas podras vender tus productos, entre muchos otros beneficios</p>
                    </div>
                </div>
            </nav> 
        </div>

                <div class="col-lg-9">
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <br>
                    <br>
                    <br>
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('img/bienvenida.jfif')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('img/dudas.jfif')}}"  alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('img/ubicacion.jfif')}}"  alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('img/ejemplos.jfif')}}"  alt="Fourth slide">
                        </div>
                        
 
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div> 
                  
                    <div class="container">  
                    @if(isset($productos))
<div class="panel panel-container">
            
                 @if(isset($categoria))
                    <h1>{{$categoria->categoria}}</h1>  
                    @endif
        <div class="row" id="productos">
        @foreach($productos as $itemProduct)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href=""><img class="card-img-top" src="{{Storage::url($itemProduct->imagen)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="">{{$itemProduct->nombre}}</a>
                        </h4>
                        <div class="simpleCart_shelfItem">
                            <br><h5>${{$itemProduct->precio}}</h5>
                            <p class="card-text">{{{$itemProduct->descripcion}}}</p>
                           
                            </div>

</div>

</div>

</div>
@endforeach
</div>
@else
<h1>No hay productos en esta categoria</h1>
@endif
</div>
</div>
    
</body>
<script>
    window.addEventListener("load",function(){
      document.getElementById("buscar").addEventListener("keyup",function(){
        fetch(`/prudcuto/encontrado?buscar=${document.getElementById("buscar").value}`,{ method:'get'})
        .then(response=>response.text())
        .then(html=>{
            document.getElementById("productos").innerHTML = html
        })
        
             
      })
      
    })
    
</script>
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>


        

        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    
 <footer class="py-5 bg-dark">
    <div>
      <p class="m-0 text-center text-white"> &copy; 2020</p>
    </div>
 </footer>
 
</html>