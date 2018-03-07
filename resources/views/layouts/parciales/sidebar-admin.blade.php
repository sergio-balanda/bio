<div class="col-sm-3 col-md-2 sidebar-offcanvas sidenav" id="sidebar" role="navigation">   
    <div class="admin-sidebar">
        <ul class="nav nav-sidebar">
            @if(Auth::user()->type == 'admin')
            <li><a href="{!!URL::to('/home/usuario')!!}">Usuarios</a></li>
            @endif
            <li><a href="{!!URL::to('/home/articulo')!!}">Productos</a></li>
            <li><a href="{!!URL::to('/home/monitor')!!}">Monitores</a></li>
            <li><a href="{!!URL::to('/home/proyector')!!}">Proyectores</a></li>
            <li><a href="{!!URL::to('/home/notebook')!!}">Notebooks</a></li>
            <li><a href="{!!URL::to('/home/procesador')!!}">Procesadores</a></li>
            <li><a href="{!!URL::to('/home/marca')!!}">Marcas</a></li>
            <li><a href="{!!URL::to('/home/pulgada')!!}">Pulgadas</a></li>   
        </ul>
    </div>          
</div><!--/side-->