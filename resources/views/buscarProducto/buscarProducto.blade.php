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