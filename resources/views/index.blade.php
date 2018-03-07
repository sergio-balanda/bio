@extends('layouts.principal')
@section('contenido')

    <div class="container-fluid no-padding">
    <div class="row">
        <img src="img/banner.jpg" alt="" class="img-responsive banner"/>
    </div>
    </div>
   
    <div class="container container-fluid novedades">
        <div class="row">
            <div class="col">
                <div class="page-header">
                    <h3>NOVEDADES</h3>
                </div>    
            </div>
        </div>
        <div class="row display-flex">
           @foreach($productos as $producto)
            <div class="col-lg-3 col-xs-6">
                <a href="{{ route('producto-detalle',$producto->nombre) }}" class="thumbnail-link">
                <div class="thumbnail">
                  <img src="imagenes_productos/{{$producto->imagen}}" alt="img-producto"
                  class="img-responsive">
                  <div class="caption">
                    <h4>{{$producto->titulo}}</h4>
                    <p>
                    <h4 class="text-center"><a href="{{route('cart-add',$producto->nombre)}}" class="btn btn-primary hidden" role="button">Comprar</a> 
                    <span  class="label label-success">
                        $ {{number_format($producto->precio,2,',','.')}}
                    </apan>
                    </h4>
                    </p>
                  </div>
                </div> 
                </a>   
            </div>
            @endforeach
        </div>
    </div> <!-- /container -->
    
    @include('layouts.parciales.comunicacion')
    
    <div class="fondoAmarillo">
        <div class="container container-fluid">
            <div class="row text-center">
                <div class="col">
                    <a href="https://listado.mercadolibre.com.ar/_CustId_9162389">
                        <img src="img/mercado.png" alt="mercadoLibre" class="img-responsive">
                    </a>
                    <p>Somos vendedores Lideres en Mercadolibre.com desde el año 2002</p>
                </div>
            </div>  
        </div>
    </div>
    
    <div class="container container-fluid hidde">
        <div class="row">
            <div class="col text-center">
                <div class="col-lg-3 col-xs-6">
                <a href="http://127.0.0.1:8000/notebooks?marca=lenovo">
                    <img src="img/lenovo2.png" alt="lenovo">
                </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                <a href="http://127.0.0.1:8000/notebooks?marca=hp">
                    <img src="img/hp.png" alt="hp">
                </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                <a href="http://127.0.0.1:8000/proyectores?marca=epson">
                    <img src="img/epson.png" alt="epson">
                </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                <a href="http://127.0.0.1:8000/proyectores?marca=optama">
                    <img src="img/optama.png" alt="optama">
                </a>
                </div>
            </div>
            <div class="col text-center">
                <div class="col-lg-3 col-xs-6">
                    <a href="http://127.0.0.1:8000/notebooks?marca=asus">  
                        <img src="img/asus.png" alt="asus">
                    </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <a href="http://127.0.0.1:8000/monitores?marca=samsung">
                        <img src="img/samsug.png" alt="samsug">
                    </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <a href="http://127.0.0.1:8000/notebooks?marca=acer">
                        <img src="img/acer.png" alt="acer">
                    </a>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <a href="http://127.0.0.1:8000/notebooks?marca=dell">
                        <img src="img/dell.png" alt="dell">
                    </a>
                </div>
            </div>    
        </div>
    </div>
@endsection