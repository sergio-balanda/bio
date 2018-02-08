@extends('layouts.app')
@section('content')
    <br>   
    <div class="clear"></div>   
        <div class="col-md-8 col-md-offset-2 main">
            
            @include('alerts.request')     
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert" style="list-style:none">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{Session::get('message')}}
            </div>
            @endif
            <div class="panel panel-success">
                <div class="panel-heading">Nuevo monitor</div>
                
                <div class="panel-body">
                    {!!Form::open(['route'=>'monitor.store','method'=>'POST','class'=>'form-horizontal'])!!}
                       
                        <div class="form-group">
                            <div class="col-md-6">
                            {!!Form::number('producto_id',$producto_id,['class'=>'hidden'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Resolucion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('resolucion',null,['class'=>'form-control'])!!}
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            {!!Form::label('Conectividad',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('conectividad',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                                   
                        <div class="form-group">
                            {!!Form::label('Curvatura',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('curvatura',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Aspect ratio',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('aspect_ratio',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Brightness',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('brightness',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                                   
                        <div class="form-group">
                            {!!Form::label('Color',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('color',null,['class'=>'form-control'])!!}
                            </div>
                        </div>                                                                                                               <div class="form-group">
                            {!!Form::label('Descripcion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'...'])!!}
                            </div>
                        </div>                                                                                                               <div class="form-group">
                            {!!Form::label('Pulgadas',null,['class'=>'col-md-4 control-label'])!!}
                           <div class="col-md-6">
                               <div id="select">
                               {!! Form::select('monitor_pulgada', $monitor_pulgadas,['class' => 'form-control']) !!}
                               </div>
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