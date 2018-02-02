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
                <li data-target="#carousel-1" data-slide-to="0" class="active"><img src="{{$productos->imagen}}" height="40px" alt=""></li>
                <li data-target="#carousel-1" data-slide-to="1">
                    <img src="{{$productos->imagen1}}" height="40px" alt="">
                </li>
                </ol>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#" class="thumbnail">
                        <img src="{{$productos->imagen}}">
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="thumbnail">
                        <img src="{{$productos->imagen1}}">
                    </a>
                </div>
            </div>
            </div>
            

        </div>
        <div class="col-lg-5 col-md-5">
            <div class="text-center">
            <h4><span  class="label label-success">$ {{$productos->precio}}</span></h4>
            <br>
            <a href="#" class="btn btn-primary">Comprar</a>
            </div>
            <hr>
            <div class="contacto">
                <p><b>Ventas:</b> <a href="mailto:ventas@biosistemas.com.ar">ventas@biosistemas.com.ar</a></p>
                <p><b>Telefonos:</b> 011-6009-2245 / 011-4977-7538 / 02323-498308</p>
                <p><b>WhatsApp:</b> +54 9 2323 368571</p>
            </div>
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



