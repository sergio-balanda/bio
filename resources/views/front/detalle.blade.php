@extends('layouts.principal')
@section('contenido')
<?php
require_once "../vendor/mercadopago/sdk/lib/mercadopago.php";

$mp = new MP ("1705553029705790", "GRjYlJNkVvkdIVcw3NWxF9fvrOqrj246");
    foreach ($cart as $valor){
$preference_data = array(
    
"items" => array(

                array(
                "title" => $valor['titulo'],
                "currency_id" => "ARS",
                "category_id" => $datos['producto_id'],
                "quantity" => $valor['cantidad'],
                "unit_price" => $total
                )
    
            ),
);}

 $preference = $mp->create_preference ($preference_data);
?>

<div class="container cart">
    <div class="page-header text-center">
        <h3>Detalle del pedido</h3>
    </div>
    <div class="page">
        <div class="row">
        <div class="table-responsive">
        <div class="col-lg-8">
            <h4>Datos del pedido</h4>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total a pagar</th>
                    </tr>
                </thead>    
                    @foreach($cart as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{number_format($item->precio,2)}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{number_format($item->precio*$item->cantidad,2)}}</td>
                    </tr>
                    @endforeach
            </table>  
        </div>
        <div class="col-lg4">
            <h4>Datos usuario</h4>
            <table class="table-stripded table-hover">
                <tr class="info">
                    <td>
                        nombre
                    </td>
                </tr>
                <tr>       
                    <td>
                        <a href="<?php echo $preference['response']['sandbox_init_point']; ?>" class="btn btn-primary">Pay</a>
                    </td>
                </tr>
            </table>
        </div>
        </div>
        </div>  
    </div>
</div>    
   
@endsection  