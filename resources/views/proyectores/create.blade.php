@extends('layouts.app')
@section('content')
   <br>   
        <div class="col-md-8 col-md-offset-2 main">
            
            @include('alerts.request')     
           
            <div class="panel panel-success">
                <div class="panel-heading">Nueva notebook</div>
                {{$id}}
                <div class="panel-body">
                    {!!Form::open(['route'=>'notebook.store','method'=>'POST','class'=>'form-horizontal'])!!}
                    
                        
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                                <a href="{{ route('notebook.index') }}" class="btn btn-danger">Cancelar</a>      
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                     
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection