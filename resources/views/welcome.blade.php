<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/consultStyle.css') }}">
    <title>TODO VEHICULOS</title>
    <title>Document</title>
</head>
<body>
    <header class="encabezado">
        <div class="ancho">
            <div class="logo">
                <p>TodoVehículos</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="usuarios/login.php">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="contenedor">
        <div id="contenido">
            <div id="section">
                <center>
                    <br>
                    <img src="images/vehiculos.jpeg" width="600" margin-bottom="20px">
                </center>
            </div>
        </div>
    </div>
    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
</body>
</html>
