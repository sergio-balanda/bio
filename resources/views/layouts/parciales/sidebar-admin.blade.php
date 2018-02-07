<div class="col-sm-3 col-md-2 sidebar-offcanvas sidenav" id="sidebar" role="navigation">   
    <div class="admin-sidebar">
        <ul class="nav nav-sidebar">
            @if(Auth::user()->type == 'admin')
            <li><a href="{!!URL::to('/usuario')!!}">Usuarios</a></li>
            @endif
            <li><a href="{!!URL::to('/productos')!!}">Productos</a></li>
            <li><a href="{!!URL::to('/monitor')!!}">Monitores</a></li>
            <li><a href="{!!URL::to('/proyector')!!}">Proyectores</a></li>
            <li><a href="{!!URL::to('/notebook')!!}">Notebooks</a></li>
            <li><a href="">Procesadores</a></li>
            <li><a href="">Marcas</a></li>
            <li><a href="">Pulgadas</a></li>   
        </ul>
    </div>          
</div><!--/side-->