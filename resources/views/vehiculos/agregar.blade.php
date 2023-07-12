<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a87f95e59.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>AGREGAR VEHICULOS</title>
</head>

<body>
    <div id="contenedor">
        <?php
        include 'includes/headerindex.php';
        ?>
        <div id="contenido">
            <div id="section">
                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
                <center>
                    @if ($errors->any())
                    <div class="col-md-8">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @endif
                    <form class="form-register" action="{{ url('Vehiculos') }}" method="post">
                        <h4 class="titleform">Agregar Vehículos</h4>
                        @csrf
                        <input class="controls" type="text" name="placa" id="placa" value="{{ old('placa') }}" placeholder="Ingrese la placa del vehículo">
                        <input class="controls" type="text" name="marca" id="marca" value="{{ old('marca') }}" placeholder="Ingrese la marca">
                        <input class="controls" type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" placeholder="Ingrese el modelo">
                        <input class="controls" type="text" name="version" id="version" value="{{ old('version') }}" placeholder="Ingrese la versión">
                        <input class="controls" type="text" name="color" id="color" value="{{ old('color') }}" placeholder="Ingrese el color">
                        <input class="controls" type="number" name="numPuestos" id="numPuestos" value="{{ old('numPuestos') }}" placeholder="Ingrese el número de puestos">
                        <input class="controls" type="number" name="numPuertas" id="numPuertas" value="{{ old('numPuertas') }}" placeholder="Ingrese el número de puertas">
                        <input class="controls" type="text" name="combustible" id="combustible" value="{{ old('combustible') }}" placeholder="Ingrese el tipo de combustible">
                        <input class="controls" type="number" name="kilometros" id="kilometros" value="{{ old('kilometros') }}" placeholder="Ingrese el kilometraje">
                        <input class="controls" type="number" name="cilindraje" id="cilindraje" value="{{ old('cilindraje') }}" placeholder="Ingrese el Cilindraje">
                        <input class="controls" type="text" name="categoria" id="categoria" value="{{ old('categoria') }}" placeholder="Ingrese la categoría (camioneta, sedán, camión, motocicleta...)">

                        <input class="btn-buttons" type="submit" name="accion" value="Guardar">
                        <input class="btn-buttons" type="reset" value="Borrar" name="accion">
                    </form>
                </center>

            </div>
        </div>

    </div>
</body>
