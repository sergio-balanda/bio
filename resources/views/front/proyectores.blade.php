@extends('layouts.principal')
@section('contenido')
<br>
<div class="container-fluid">
      
    <div class="row row-offcanvas row-offcanvas-left">
        
        <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <div class="container-fluid">
            <ul class="nav nav-sidebar">
               <li><h5 style="color:#0085c3">Marcas</h5></li>
                
            </ul>
            <hr>
            </div>
          
        </div><!--/side-->
           
        <div class="col-sm-9 col-md-10 main">
           
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="icon-th-list"></i></button>
          </p>
          
		  <h4 class="page-header">
            Proyectores similar a las demas paginas :(<small> 
            
                <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
                   <option value="" selected>Ordenar &nbsp&nbsp</option>
                    <option value="">
                        menor
                    </option>
                    <option value="">
                        mayor
                    </option>
                </select>
            
            
            </small>
          </h4>

          <div class="row display-flex">
             
              <div class="col-xs-6 col-lg-4">
                <a href="#" class="thumbnail-link">
                <div class="thumbnail">
                  <img src="#" alt="img-proyector"
                  class="img-responsive">
                  <div class="caption">
                    <h4>Proyector</h4>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p><a href="#" class="btn btn-primary hidden" role="button">Comprar</a> 
                    <a href="#" class="btn btn-success">
                        $ Precio
                    </a>
                  </div>
                </div> 
                </a> 
              </div>
              
          </div>
        </div>
    </div>
    <center>
    
    </center>
</div>
@include('layouts.parciales.comunicacion')  

<script type="text/javascript">
    window.onchange = function(){
        location.href=document.getElementById("selectbox").value;
    }       
</script>           

@endsection