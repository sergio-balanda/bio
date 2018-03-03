@extends('layouts.principal')
@section('contenido')
<br>
<h4 class="page-header producto-detalle">
    {{$productos->titulo}}
</h4>
    
<div class="container-fluid">
    <div class="row">
        <!--inicio carousel -->
   
        <div id="carousel-1" class="carousel slide" data-ride="carousel" data-interval="false" >
           
            <div class="col-lg-1 col-md-1">
                <ol class="carousel-indicators hidde">
                <li data-target="#carousel-1" data-slide-to="0" class="active"><img src="/imagenes_productos/{{$productos->imagen}}" height="40px" alt="imagen-detalle"></li>
                <li data-target="#carousel-1" data-slide-to="1">
                    <img src="/imagenes_productos/{{$productos->imagen1}}" height="40px" alt="imagen-detalle-2">
                </li>
                @if($productos->imagen2)
                <li data-target="#carousel-1" data-slide-to="2">
                    <img src="/imagenes_productos/{{$productos->imagen2}}" height="40px" alt="imagen-detalle-3">
                </li>
                @endif
                @if($productos->imagen3)
                <li data-target="#carousel-1" data-slide-to="2">
                    <img src="/imagenes_productos/{{$productos->imagen3}}" height="40px" alt="imagen-detalle-4">
                </li>
                @endif
                </ol>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#" class="thumbnail">
                        <img src="/imagenes_productos/{{$productos->imagen}}" alt="imagen-detalle">
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="thumbnail">
                        <img src="/imagenes_productos/{{$productos->imagen1}}" alt="imagen-detalle-2">
                    </a>
                </div>
                @if($productos->imagen2)
                    <div class="item">
                        <a href="#" class="thumbnail">
                            <img src="/imagenes_productos/{{$productos->imagen2}}" alt="imagen-detalle-3">
                        </a>
                    </div>
                @endif
                @if($productos->imagen3)
                    <div class="item">
                        <a href="#" class="thumbnail">
                            <img src="/imagenes_productos/{{$productos->imagen3}}" alt="imagen-detalle-4">
                        </a>
                    </div>
                @endif
            </div>
            </div>
            

        </div>
        <div class="col-lg-5 col-md-5">
            <h4>{{$productos->titulo}}</h4>
            <hr>
            <div class="">
                <h4>Precio: <span  class="label label-success">$ {{number_format($productos->precio,2,',','.')}}</span></h4>
                <br>
                <a href="#" class="btn btn-primary hidden">Comprar</a>
            </div>
            <div class="contacto">
                <p><b>Ventas:</b> <a href="mailto:ventas@biosistemas.com.ar">ventas@biosistemas.com.ar</a></p>
                <p><b>Teléfonos:</b> <span class="text-primary">011-6009-2245 / 011-4977-7538 / 02323-498308</span></p>
                <p><b>WhatsApp:</b> <span class="text-primary">+54 9 2323 368571</span></p>
            </div>
            <p class="text-muted">Nuestro horario de atención telefónica es de lunes a viernes de 9 a 18hs. Puede dejarnos su pedido o inquietudes incluso fuera de horario por email, lo contactaremos a la brevedad.</p>
        </div>

    <!--fin carousel -->
    </div>
</div>
    @if ($productos->tipo == 'notebook')
        @include('front.parciales.notebook-detalle')
    @elseif ($productos->tipo == 'monitor')
        @include('front.parciales.monitor-detalle')
    @else
        @include('front.parciales.proyectors-detalle')
    @endif
@endsection



