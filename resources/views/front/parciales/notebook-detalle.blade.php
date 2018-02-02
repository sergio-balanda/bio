
<h4 class="page-header producto-detalle text-center">
    {{$notebooks->titulo}}
</h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                <p class="lead">{{$notebooks->descripcion}}</p>
        </div>
    </div>
    @if ($notebooks->descripcionB != '')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="lead">{{$notebooks->descripcionB}}</p>
            </div>
        </div>
    @endif
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
                    <th><h5>Procesador</h5></th>
                    <td>{{$notebooks->procesador}}</td>
                </tr>
                <tr>
                    <th><h5>Memoria</h5></th>
                    <td>{{$notebooks->disco_rigido}} <br> {{$notebooks->ram}}</td>
                </tr>
                <tr>
                    <th><h5>Pulgadas</h5></th>
                    <td>{{$notebooks->pulgada}}</td>
                </tr>
                <tr>
                    <th><h5>Sistema Operativo</h5></th>
                    <td>{{$notebooks->so}}</td>
                </tr>
                <tr>
                    <th><h5>Imagen</h5></th>
                    <td>{{$notebooks->video}} <br> {{$notebooks->resolucion}}</td>
                </tr>
                <tr>
                    <th><h5>Conectividad</h5></th>
                    <td>{{$notebooks->conectividad}}</td>
                </tr>
                <tr>
                    <th><h5>Detalles</h5></th>
                    <td>peso {{$notebooks->peso}} kg <br> color {{$notebooks->color}} <br> batería {{$notebooks->bateria}}</td>
                </tr>
                <tr>
                    <th><h5>Link</h5></th>
                    <td>del fabricante, <a href="{{$notebooks->link}}"  target="_blank">aquí</a></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
