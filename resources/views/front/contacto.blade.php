@extends('layouts.principal')
@section('contenido')
<br>
<div class="container-fluid">
   <div class="col-sm-9 col-md-10 col-md-offset-1 main">
      <h4 class="page-header">Contacto</h4>
      @include('alerts.success')
      <div class="row">
         <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="info-contacto">
               <h5 class="icon-mail">ventas@biosistemas.com.ar</h5>
               <h5 class="icon-location">Cap Fed: 011-6009-2245 / 011-4977-7538</h5>
               <h5 class="icon-location">Lujan Bs As: 02323-498308</h5>
               <h5 class="icon-clock">Lunes a Viernes de 9,30hs. a 18hs</h5>
               <h5 class="icon-whatsapp">WhatsApp: +54 9 2323 368571</h5>
               <hr>
               <p class="text-muted">Nuestro horario de atención telefónica es de Lunes a Viernes de 9 a 18hs. Puede dejarnos su pedidio o inquietudes incluso fuera de horario por email, lo contactaremos a la brevedad.</p>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="contact-form">
                     {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                     <div class="col-md-12">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                           {!!Form::text('name',null,['placeholder'=>'Nombre...','class'=>'form-control'])!!}
                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                           {!!Form::email('email',null,['placeholder'=>'Email...','class'=>'form-control'])!!}
                           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group {{ $errors->has('mensaje') ? ' has-error' : '' }}">
                           {!!Form::textarea('mensaje',null,['placeholder'=>'Mensaje...','class'=>'form-control'])!!}
                           @if ($errors->has('mensaje'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mensaje') }}</strong>
                                    </span>
                            @endif
                        </div>
                     </div>
                     {!!Form::submit('Enviar',['class'=>'btn btn-primary btn-lg'])!!}
                     {!!Form::close()!!}
            </div>
         </div>
      </div>
   </div>
</div>
<br>
@endsection