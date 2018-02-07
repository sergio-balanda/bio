  
   <div class="row">
        <div class="col-md-10 col-xs-10">
            @include('monitores.search')
        </div>
        <div class="col-md-2 col-xs-2">
            <a href="{!!URL::to('/monitor')!!}"  title="refresh">
            <button class="btn btn-success"><span class="icon-arrows-ccw"></span></button>
            </a>
        </div>  
    </div>
    
   @if(!count($monitors)==0)  
   <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>procesador</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        @foreach($monitors as $monitor)
        <tbody>
            <tr>
                <td>{{$monitor->id}}</td>
                <td>{{$monitor->producto_titulo}}</td>
                <td>
                    <div class="btn-group" style="display: inline-flex;">
                    <a href="{{route('monitor.edit', $parameters = $monitor->id )}}" class="btn btn-primary">
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
        <h3>No hay Monitores</h3>
    @endif
    <div class="row text-center">
    {{ $monitors->links() }}
    </div>
   
<script> 
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })
</script>