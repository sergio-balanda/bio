
<h4 class="page-header producto-detalle text-center">
    {{$monitors->titulo}}
</h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                <p class="lead">{{$monitors->descripcion}}</p>
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
                    <td>{{$monitors->marca}}</td>
                </tr>
                <tr>
                    <th><h5>Pulgadas</h5></th>
                    <td>{{$monitors->pulgada}}</td>
                </tr>
                <tr>
                    <th><h5>Resolución</h5></th>
                    <td>{{$monitors->resolucion}}</td>
                </tr>
                <tr>
                    <th><h5>Relación de aspecto</h5></th>
                    <td>{{$monitors->aspect_ratio}}</td>
                </tr>
                <tr>
                    <th><h5>Curvatura de Pantalla</h5></th>
                    <td>{{$monitors->curvatura}}</td>
                </tr>
                <tr>
                    <th><h5>Brillo</h5></th>
                    <td>{{$monitors->brightness}}</td>
                </tr>
                <tr>
                    <th><h5>Conectividad</h5></th>
                    <td>{{$monitors->conectividad}}</td>
                </tr>
                <tr>
                    <th><h5>Color</h5></th>
                    <td>{{$monitors->color}}</td>
                </tr>
                <tr>
                    <th><h5>Link</h5></th>
                    <td>del fabricante, <a href="{{$monitors->link}}"  target="_blank">aquí</a></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
