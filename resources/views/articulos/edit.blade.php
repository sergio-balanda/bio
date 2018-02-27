@extends('layouts.app')
@section('content')
   <br>
    
        <div class="col-md-8 col-md-offset-2 main">
           
            @include('alerts.request')     

            <div class="panel panel-success">
                <div class="panel-heading">Editar Producto</div>

                <div class="panel-body">
                    {!!Form::model($producto,['route'=>['articulo.update',$producto->id],'method'=>'PUT','files' => true,'class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Titulo',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('titulo',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Nombre',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('nombre',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Precio',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::number('precio',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <h5 class="text-muted text-center">Volver a seleccionar tipo y marca</h5>
                                <hr>
                            </div>    
                        </div>
                        <hr>
                        <div class="form-group">
                            {!!Form::label('Tipo de producto',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::select('tipo', ['notebook' => 'Notebook', 'proyector' => 'Proyector', 'monitor' => 'Monitor'], '',['class' => 'form-control'])!!}
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
                            <div class="col-md-10 col-md-offset-1">
                                <h5 class="text-muted text-center">Puede modificar la imagen seleccionando nuevo archivo, de lo contrario se mantendra seleccionado con anterioridad</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Imagen',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::file('imagen') !!}
                            </div>
                        </div>
                        <p class="text-muted text-center text-danger">{{ URL::to('imagenes_productos/' . $producto->imagen)  }}</p>
                        <div class="form-group">
                            {!!Form::label('Imagen 2',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen1', ['class' => 'form-control-file']) !!}
                            </div>
                        </div>
                        <p class="text-muted text-center text-danger">{{ URL::to('imagenes_productos/' . $producto->imagen1)  }}</p>
                        <div class="form-group">
                            {!!Form::label('Imagen 3',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen2') !!}
                            </div>
                        </div>
                        <p class="text-muted text-center text-danger">{{ URL::to('imagenes_productos/' . $producto->imagen2)  }}</p>
                        <div class="form-group">
                            {!!Form::label('Imagen 4',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen3') !!}
                            </div>
                        </div>
                        <p class="text-muted text-center text-danger">{{ URL::to('imagenes_productos/' . $producto->imagen3)  }}</p>
                        <div class="form-group">
                            {!!Form::label('Imagen 5',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                           {!! Form::file('imagen4') !!}
                            </div>
                        </div>
                        <p class="text-muted text-center text-danger">{{ URL::to('imagenes_productos/' . $producto->imagen4)  }}</p>
                        <div class="form-group">
                            <div class="form-control text-center col-md-10 col-md-offset-1">
                               <a href="{{ route('articulo.index') }}" class="btn btn-danger">Cancelar</a> 
                               {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}                          
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection