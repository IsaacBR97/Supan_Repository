@extends('Supervisor.supervisorTablero')
@section ('tablero')
<body>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{Storage::url($encontrar->fotoUrl)}}" data-original-title="Usuario"> 
   <img src="{{asset('Storage::url(rolsUser->fotoUrl)')}}" alt="">
        </div>
        <div class="col-md-6">
            <strong>Informacion</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Identificacion                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->id}}    
                            
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Nombre                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->nombre}}  
                            
                        </td>
                    </tr>
                     <tr>        
                       <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                Apellido Paterno                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->apellidoP}} 
                             
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Apellido Materno                                                 
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->apellidoM}}
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Correo                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->email}}
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Cargo                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$encontrar->rolsUser->rol}}
                        </td>
                    </tr>

                                  
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>                                        
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
@endsection