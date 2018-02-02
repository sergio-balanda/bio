<div class="col-sm-3 col-md-2 sidebar-offcanvas sidenav" id="sidebar" role="navigation">   
    <div class="admin-sidebar">
        <ul class="nav nav-sidebar">
            @if(Auth::user()->type == 'admin')
            <li><a href="{!!URL::to('/usuario')!!}">Usuarios</a></li>
            @endif
            <li><a href="">Notebooks</a></li>
            <li><a href="">Monitores</a></li>
            <li><a href="">Proyectores</a></li>  
        </ul>
    </div>          
</div><!--/side-->