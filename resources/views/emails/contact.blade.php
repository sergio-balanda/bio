<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>BIOSISTEMAS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <style>
        body {font-family: 'Roboto', sans-serif;;}
        a {text-decoration: none;}
        .contenedor {margin:50px auto; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; box-shadow: 0px 0px 10px grey;max-width:400px;height: auto;}
        .tarjeta h2{margin: 20px;}
    </style>
</head>
<body>
    <div class="contenedor">
      <div class="tarjeta">
            <h2 class="titulo"><a href="http://biosistemas.com.ar/">BIOSISTEMAS</a></h2>
            <hr>
            <p><b>Consulta de cliente:</b></p>
            <P><strong>Nombre: </strong>{!!$name!!}</P>
            <P><strong>Correo: </strong>{!!$email!!}</P>
            <P><strong>Mensaje: </strong>{!!$mensaje!!}</P>
        </div>
    </div>
</body>
</html>