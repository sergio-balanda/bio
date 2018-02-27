@extends('layouts.app')
@section('content')
   <br>
    
        <div class="col-md-8 col-md-offset-2 main">
           
            @include('alerts.request')     

            <div class="panel panel-success">
                <div class="panel-heading">Editar notebookk</div>

                <div class="panel-body">
                    {!!Form::model($notebook,['route'=>['notebook.update',$notebook->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Procesador',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('procesador',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Disco rigido',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('disco_rigido',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Ram',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('ram',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Descripcion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('descripcion',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Descripcion 2',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('descripcionB',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Video',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('video',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Resolucion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('resolucion',null,['class'=>'form-control','rows'=>3])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Bateria',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('bateria',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Conectividad',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('conectividad',null,['class'=>'form-control','rows'=>2])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Sistema operativo',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('so',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Color',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('color',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Procesador',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            <div id="select">  
                               {!! Form::select('processor_id', $processors,['class' => 'form-control col-md-12']) !!}
                            </div> 
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Pulgadas',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            <div id="select">  
                            {!! Form::select('pulgada_id', $pulgadas_notebooks,['class' => 'form-control']) !!}
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                           {!! Form::label('peso', 'Peso', ['class' => 'col-md-4 control-label']) !!}
                           <div class="col-md-6">
                           {!! Form::text('peso', null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                                <a href="{{ route('notebook.index') }}" class="btn btn-danger">Cancelar</a> 
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection