@extends('layouts.principal')
@section('contenido')
<br>
<div class="container-fluid">
      
    <div class="row row-offcanvas row-offcanvas-left">
        
        <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <div class="container-fluid">
            <ul class="nav nav-sidebar">
               <li><h5 style="color:#0085c3">Marcas</h5></li>
                @foreach($marcas as $marca)
                    <li><a href="{!!URL::to('/monitores?precio=')!!}{{$ordenarPor}}&marca={{$marca->nombre}}">{{$marca->nombre}} <span class="badge">{{$marca->cantidad}}</span></a></li>
                @endforeach
            </ul>
            <hr>
            <ul class="nav nav-sidebar">
                <li><h5 style="color:#0085c3">Pantalla</h5></li>
                @foreach($pulgadas as $pulgada)
                    <li><a href="{!!URL::to('/monitores?precio=')!!}{{$ordenarPor}}&pulgada={{$pulgada->nombre}}">{{$pulgada->nombre}} <span class="badge">{{$pulgada->cantidad}}</span></a></li>
                @endforeach
            </ul>
            </div>
          
        </div><!--/side-->
           
        <div class="col-sm-9 col-md-10 main">
           
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="icon-th-list"></i></button>
          </p>
          
		  <h4 class="page-header">
            Monitores <small> 
            
                <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
                   <option value="" selected>Ordenar &nbsp&nbsp</option>
                    <option value="{!!URL::to('/monitores?precio=menor')!!}">
                        menor
                    </option>
                    <option value="{!!URL::to('/monitores?precio=mayor')!!}">
                        mayor
                    </option>
                </select>
            
            
            </small>
          </h4>

          <div class="row display-flex">
            @foreach($monitores as $monitor)
              <div class="col-xs-6 col-lg-4">
                <a href="{{ route('producto-detalle',$monitor->monitor_nombre) }}" class="thumbnail-link">
                <div class="thumbnail">
                  <img src="imagenes_productos/{{$monitor->imagen}}" alt="img-notebooks"
                  class="img-responsive">
                  <div class="caption">
                    <h4>{{$monitor->titulo}}</h4>
                    <p>Tamaño: "{{$monitor->tamaño}}"</p>
                    <p class="text-center"><a href="#" class="btn btn-primary hidden" role="button">Comprar</a> 
                    <a href="#" class="btn btn-success">
                        $ {{number_format($monitor->precio,2,',','.')}} 
                    </a>
                  </div>
                </div> 
                </a> 
              </div>
            @endforeach  
          </div>
        </div>
    </div>
    <center>
        
    </center>
</div>
@include('layouts.parciales.comunicacion')  

<script type="text/javascript">
    window.onchange = function(){
        location.href=document.getElementById("selectbox").value;
    }       
</script>           

@endsection