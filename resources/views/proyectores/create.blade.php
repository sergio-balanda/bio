@extends('layouts.app')
@section('content')
   <br>   
        <div class="col-md-8 col-md-offset-2 main">
            
            @include('alerts.request')     
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert" style="list-style:none">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{Session::get('message')}}
            </div>
            @endif
            <div class="panel panel-success">
                <div class="panel-heading">Nuevo proyector</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'proyector.store','method'=>'POST','class'=>'form-horizontal'])!!}
                        
                        <div class="form-group">
                            <div class="col-md-6">
                            {!!Form::number('producto_id',$producto_id,['class'=>'hidden'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Lumenes',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('lumenes',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Lente',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('lente',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Duracion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('duracion',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Conectividad',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('conectividad',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('3d',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::select('3d', [0 => 'No', 1 => 'Si'], '',['class' => 'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Contraste',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('contraste',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!!Form::label('Descripcion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'...'])!!}
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