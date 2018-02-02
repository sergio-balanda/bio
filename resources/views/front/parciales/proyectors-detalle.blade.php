
<h4 class="page-header producto-detalle text-center">
    {{$proyectors->titulo}}
</h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                <p class="lead">{{$proyectors->descripcion}}</p>
        </div>
    </div>

</div>

<h4 class="page-header producto-detalle text-center">
    Especificaciones
</h4>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="table">
              <table class="table table-striped table-hover tabla-detalle">
                <tr>
                    <th><h5>Marca</h5></th>
                    <td>{{$proyectors->marca}}</td>
                </tr>
                <tr>
                    <th><h5>Lumenes</h5></th>
                    <td>{{$proyectors->lumenes}}</td>
                </tr>
                <tr>
                    <th><h5>Lente</h5></th>
                    <td>{{$proyectors->lente}}</td>
                </tr>
                <tr>
                    <th><h5>Duracion</h5></th>
                    <td>{{$proyectors->duracion}}</td>
                </tr>
                <tr>
                    <th><h5>Conectividad</h5></th>
                    <td>{{$proyectors->conectividad}}</td>
                </tr>
                <tr>
                    <th><h5>Link</h5></th>
                    <td>del fabricante, <a href="{{$proyectors->link}}"  target="_blank">aquí</a></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
