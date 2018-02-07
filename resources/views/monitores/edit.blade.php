@extends('layouts.app')
@section('content')
   <br>
    
        <div class="col-md-8 col-md-offset-2 main">
           
            @include('alerts.request')     

            <div class="panel panel-success">
                <div class="panel-heading">Editar monitor</div>

                <div class="panel-body">
                    {!!Form::model($monitor,['route'=>['monitor.update',$monitor->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Resolucion',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('resolucion',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                                <a href="{{ route('monitor.index') }}" class="btn btn-danger">Cancelar</a> 
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection