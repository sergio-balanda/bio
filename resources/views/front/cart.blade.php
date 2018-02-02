@extends('layouts.principal')
@section('contenido')

<div class="container cart">
    <div class="page-header text-center">
        <h3>Carrito de compras</h3>
    </div>

@if(!count($cart)==0)
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Quitar</th>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td><img src="{{$item->imagen}}"  height="50px"></td>
                <td>{{$item->titulo}}</td>
                <td>{{number_format($item->precio,2)}}</td>
                <td>{{$item->cantidad}}</td>
                <td><a href="{{route('cart-delete',$item->nombre)}}" class="btn btn-danger">Quitar</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="info text-center">
              <td colspan="5"><h5>Total a pagar ${{number_format($total,2)}}</h5></td>
            </tr>
        </tfoot>
    </table>
</div>
<div class="row text-center">
    <div class="col">
        <p>
            <a href="{!!URL::to('/')!!}" class="btn btn-primary">Volver</a>
            <a href="{{route('cart-create')}}" class="btn btn-success">Seguir</a>
        </p>
    </div>
</div>
@else
<div class="row text-center">
    <div class="col">
        <h3>No hay productos</h3>
        <a href="{!!URL::to('/')!!}" class="btn btn-danger text-center">Volver</a>
    </div>
</div>

@endif
</div>
@endsection