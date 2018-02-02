@extends('layouts.principal')
@section('contenido')

<div class="container cart">
    <div class="page-header text-center">
        <h3>Mi Carrito</h3>
        <p>Ingrese sus datos para continuar la compra.</p>
    </div>


    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        {!! Form::open(['action' => 'CartController@store','method'=>'POST']) !!}
            <div class="form-group">
                        {!!Form::label('nombre','Nombre:')!!}
                        {!!Form::text('nombre_completo',null,['class'=>'form-control', 'placeholder'=>'Ingrese Nombre...'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('telefono','Telefono:')!!}
                        {!!Form::text('telefono',null,['class'=>'form-control', 'placeholder'=>'Ingrese Telefono...'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('email','Email:')!!}
                        {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'su@correo.com...'])!!}
                    </div> 
                    <br>
                    <div class="form-group text-center">
                         {!!link_to_action('CartController@index', $title = 'volver', $parameters = [], $attributes = ['class'=>'btn btn-danger btn-lg']);!!}
                         
                        {!!Form::submit('Continuar',['class'=>'btn btn-primary btn-lg'])!!}
                    </div>
        {!! Form::close() !!}
        </div>

</div>
</div>
@endsection    