@extends('layouts.app')
@section('content')
    <br>
    <div class="clear"></div>    
        <div class="col-md-8 col-md-offset-2 main">
            
            @include('alerts.request')     
           
            <div class="panel panel-success">
                <div class="panel-heading">Nuevo producto</div>

                <div class="panel-body">
                    {!!Form::open(['route'=>'articulo.store','method'=>'POST','files' => true, 'class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Titulo',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('titulo',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('nombre',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('nombre',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Tipo de producto',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::select('tipo', ['notebook' => 'Notebook', 'proyector' => 'Proyector', 'monitor' => 'Monitor'], '',['class' => 'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                           {!! Form::label('precio', 'Precio', ['class' => 'col-md-4 control-label']) !!}
                           <div class="col-md-6">
                           {!! Form::number('precio', null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Marca',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            <div id="select">
                            {!! Form::select('marca_id', $marcas,['class' => 'form-control']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Link',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('link',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Imagen',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Imagen 2',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen1', ['class' => 'form-control-file']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Imagen 3',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen2') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Imagen 4',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen3') !!}
                            </div>
                        </div>
                         
                        <div class="form-group">
                            {!!Form::label('Imagen 5',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen4') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection