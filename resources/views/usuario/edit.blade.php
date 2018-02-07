@extends('layouts.app')
@section('content')
    <br>
    <div class="clear"></div>
        <div class="col-md-8 col-md-offset-2 main">
           
            @include('alerts.request')     

            <div class="panel panel-success">
                <div class="panel-heading">Editar Usuario</div>

                <div class="panel-body">
                    {!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    
                        <div class="form-group">
                            {!!Form::label('Nombre',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::text('name',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('E-Mail',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::email('email',null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Tipo de usuario',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!! Form::select('type', ['user' => 'Usuario', 'admin' => 'Administrador'], 'user',['class' => 'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('Password',null,['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                            {!!Form::password('password',['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control text-center col-md-12">
                                <a href="{{ route('usuario.index') }}" class="btn btn-danger">Cancelar</a>
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                           </div>
                        </div>
                    {!!Form::close()!!}
        </div>

@endsection