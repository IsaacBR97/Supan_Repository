@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Oportunidades Supan</div>

                
            </div>
        </div>
        <div class="container">
<body>
    

<div class="row">
<div class="col-lg-3"><br>
<input type="search" id="buscar" style="width: 500px; height: 35px; margin-left: 730px" placeholder="Buscar productos y más... " >
 
    <img class=" img-fluid" src="{{asset('img/Oportunidades.jpg')}}" width="300">

    <!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-close">
        <a href="#" class="navbar-dark bg-navy nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Categorías
            <i class="right fas fa-angle-left"></i>
        </p>
        </a>
       
        <ul class="nav nav-treeview">
            <li class="nav-item">
            @foreach($categorias as $itemCategoria)
                <a href="{{route('buscarProductos',$itemCategoria->id_categoria)}}" class="nav-link">
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
        <h6 class="card-subtitle mb-2 text-muted">Oportunidades Supan</h6>
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
                <div class="col-lg-4 col-md-6 mb-4" >
                    <div class="card h-100">
                        <a href=""><img class="card-img-top"  src="{{Storage::url($itemProduct->imagen)}}"  height="300" width="300" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="">{{$itemProduct->nombre}}</a>
                            </h4>
                            <div class="simpleCart_shelfItem">
                                <br><h5>${{$itemProduct->precio}}</h5>
                                <p class="card-text">{{{$itemProduct->descripcion}}}</p>
                               
                                </div>
                      @if(isset(Auth::user()->id)&&Auth::user()->id != $itemProduct->id)
                             
                            <a href="{{route('iniciarVenta',$itemProduct->id_product)}}" class="btn btn-secondary">comprar</a>
                            <a href="{{route('indexPreguntas',$itemProduct->id_product)}}" class="btn btn-dark">preguntar</a>
                        @else
                        <a href="{{route('indexPreguntas',$itemProduct->id_product)}}" class="btn btn-dark">Ver preguntas</a>
                       @endif
                            
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
<script>
    window.addEventListener("load",function(){
      document.getElementById("buscar").addEventListener("keypress",function(){
        fetch(`/Productos/ventas/Producto/encontrado?buscar=${document.getElementById("buscar").value}`,{ method:'get'})
        .then(response=>response.text())
        .then(html=>{
            document.getElementById("productos").innerHTML = html
        })
        
             
      })
      
    })
    
</script>
</body>
@endsection
