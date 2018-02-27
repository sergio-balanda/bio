<h4 class="red-text text-lighten-2">Proyectores</h4><hr>
  
<div class="row">
    <div class="col-md-10 col-xs-10">
        @include('proyectores.search')
    </div>
    <div class="col-md-2 col-xs-2">
        <a href="{!!URL::to('/proyector')!!}"  title="refresh">
        <button class="btn btn-success"><span class="icon-arrows-ccw"></span></button>
        </a>
    </div>  
</div>
    
   @if(!count($proyectors)==0)  
   <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>lumenes</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        @foreach($proyectors as $proyector)
        <tbody>
            <tr>
                <td>{{$proyector->producto_titulo}}</td>
                <td>{{$proyector->lumenes}}</td>
                <td>
                    <div class="btn-group" style="display: inline-flex;">
                    <a href="{{route('proyector.edit', $parameters = $proyector->id )}}" class="btn btn-primary">
                        <span class="icon-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="editar"></span>
                    </a>
                    </div>
                    {!!Form::close()!!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    @else
        <h3>No hay Proyectores</h3>
    @endif
    <div class="row text-center">
    {{ $proyectors->links() }}
    </div>
   
<script> 
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })
</script>