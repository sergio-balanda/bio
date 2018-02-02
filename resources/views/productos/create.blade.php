@extends('layouts.app')
@section('content')
   <br>   
        <div class="col-md-8 col-md-offset-2 main">
            
            @include('alerts.request')     
           
            <div class="panel panel-success">
                <div class="panel-heading">Nuevo producto</div>

                <div class="panel-body">
                    {!!Form::open(['route'=>'productos.store','method'=>'POST','class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Titulo',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('titulo',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('nombre',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::email('nombre',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Tipo de producto',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::select('tipo', ['notebook' => 'Notebook', 'proyector' => 'Proyector', 'monitor' => 'Monitor'], '',['class' => 'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Precio',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::number('precio',['class'=>'form-control'])!!}
                            </div>
                        </div>
                 
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                               {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                               <a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>                           
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection