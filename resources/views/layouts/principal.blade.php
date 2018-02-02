<!DOCTYPE html>
    
<html lang="es">
    
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Biosistemas</title>
<link rel="icon" href="/img/logoicon.png"/>
{!!Html::style('css/bootstrap.min.css')!!}
{!!Html::style('css/estilos.css')!!}
</head>
    
<body>
   
    @include('layouts.parciales.nav')
    
    @yield('contenido')
    
    @include('layouts.parciales.footer')

{!!Html::script('js/jquery-3.2.1.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/canvas_side.js')!!}
</body>
</html>