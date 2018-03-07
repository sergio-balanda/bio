@extends('layouts.app')

@section('content')
<div class="container-fluid admin">
    <div class="row row-offcanvas row-offcanvas-left">
        <!--/side-->
        @include('layouts.parciales.sidebar-admin')
        <!--/side-->
        
        <div class="col-sm-9 col-md-10 main">
           
            <!--toggle sidebar button-->
            <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="icon-th-list"></i></button>
            </p>
            
            @include('alerts.success')
            
            <!--contenido-->
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @include('pulgadas.pulgadas') 
                    </div>
            </div>
            <!--contenido-->
        </div>
            
     
    
    </div>
</div>
@endsection