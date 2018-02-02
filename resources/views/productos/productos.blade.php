<h4 class="red-text text-lighten-2">Registrar producto
  <a href="{!!URL::to('/producto/create')!!}"><button type="button" class="btn btn-primary red lighten-2">Nuevo</button></a>
</h4>
  
   <div class="row">
        <div class="col-md-10 col-xs-10">
            @include('productos.search')
        </div>
        <div class="col-md-2 col-xs-2">
            <a href="{!!URL::to('/producto')!!}"  title="refresh">
            <button class="btn btn-success"><span class="icon-arrows-ccw"></span></button>
            </a>
        </div>  
    </div>
    
   @if(!count($productos)==0)  
   <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        @foreach($productos as $producto)
        <tbody>
            <tr>
                <td>{{$producto->titulo}}</td>
                <td>{{$producto->tipo}}</td>
                <td>
                    <div class="btn-group" style="display: inline-flex;">
                    <a href="{{route('usuario.edit', $parameters = $producto->id )}}" class="btn btn-primary">
                        <span class="icon-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="editar"></span>
                    </a>
                     {!!Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE'])!!}
                    <button type="submit" class="btn btn-danger" >
                        <span class="icon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="eliminar"></span>
                    </button>
                    </div>
                    {!!Form::close()!!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    @else
        <h3>No hay Productos</h3>
    @endif
    <div class="row text-center">
    {{ $productos->links() }}
    </div>
   
<script> 
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })
</script>