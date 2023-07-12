<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a87f95e59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <link rel="stylesheet" href="../css/listarStyle.css">
    <title>LISTAR VEHICULOS</title>
</head>

<body>
    <span style="color: red;">{{ @$_REQUEST["msj"] }}</span>

    <div id="contenedor">
        <?php
        include 'includes/headerindex.php';
        ?>
        <div id="contenido">
            <section>
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif

                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
                <center>
                    <form class="form-register">
                        <h4 class="titleform">INFORMACION DEL VEHICULO {{$data_vehi->placa}} </h4>
                        <label for="exampleInput" class="form-label">PLACA</label>
                        <input disabled class="controls" type="text" name="placa" id="placa" value="{{$data_vehi->placa}}" placeholder="Ingrese la placa del vehículo">
                        <label for="exampleInput" class="form-label">MARCA</label>
                        <input disabled class="controls" type="text" name="marca" id="marca" value="{{$data_vehi->marca}}" placeholder="Ingrese la marca">
                        <label for="exampleInput" class="form-label">MODELO</label>
                        <input disabled class="controls" type="text" name="modelo" id="modelo" value="{{$data_vehi->modelo}}" placeholder="Ingrese el modelo">
                        <label for="exampleInput" class="form-label">VERSION</label>
                        <input disabled class="controls" type="text" name="version" id="version" value="{{$data_vehi->version}}" placeholder="Ingrese la versión">
                        <label for="exampleInput" class="form-label">COLOR</label>
                        <input disabled class="controls" type="text" name="color" id="color" value="{{$data_vehi->color}}" placeholder="Ingrese el color">
                        <label for="exampleInput" class="form-label"># PUESTOS</label>
                        <input disabled  class="controls" type="number" name="numPuestos" id="numPuestos" value="{{$data_vehi->numPuestos}}" placeholder="Ingrese el número de puestos">
                        <label for="exampleInput" class="form-label"># PUERTAS</label>
                        <input disabled class="controls" type="number" name="numPuertas" id="numPuertas" value="{{$data_vehi->numPuertas}}" placeholder="Ingrese el número de puertas">
                        <label for="exampleInput" class="form-label">TIPO COMBUSTIBLE</label>
                        <input disabled class="controls" type="text" name="combustible" id="combustible" value="{{$data_vehi->combustible}}" placeholder="Ingrese el tipo de combustible">
                        <label for="exampleInput" class="form-label">KILOMETRAJE</label>
                        <input disabled class="controls" type="number" name="kilometros" id="kilometros" value="{{$data_vehi->kilometros}}" placeholder="Ingrese el kilometraje">
                        <label for="exampleInput" class="form-label">CILINDRAJE</label>
                        <input disabled class="controls" type="number" name="cilindraje" id="cilindraje" value="{{$data_vehi->cilindraje}}" placeholder="Ingrese el Cilindraje">
                        <label for="exampleInput" class="form-label">CATEGORIA</label>
                        <input disabled class="controls" type="text" name="categoria" id="categoria" value="{{$data_vehi->categoria}}" placeholder="Ingrese la categoría (camioneta, sedán, camión, motocicleta...)">
                    </form>
                </center>


            </section>
        </div>

    </div>

</body>

</html>
