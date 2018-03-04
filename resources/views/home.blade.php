@extends('layouts.app')

@section('content')
<div class="container-fluid admin">
    <div class="row row-offcanvas row-offcanvas-left">
        @include('layouts.parciales.sidebar-admin')
       <!--/side-->
        
        <div class="col-sm-9 col-md-10 main">
            @include('alerts.errors')
            @if (session('status'))
                <div class="alert alert-success alert-dismissible" role="alert" style="list-style:none">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      {{ session('status') }}
                </div>
            @endif
            <!--toggle sidebar button-->
            <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="icon-th-list"></i></button>
            </p>
            
            <!--default-->
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Dashboard</div>

                            <div class="panel-body">
                                Has iniciado sesión!
                            </div>
                        </div>
                    </div>
            </div>
            <!--default-->
        </div>
            
     
    
    </div>
</div>
@endsection
