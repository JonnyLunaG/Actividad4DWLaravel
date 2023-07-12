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
    <title>FORMULARIO DE REGISTRO DE USUARIOS</title>
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
                <form class="form-register" action="{{ url('Usuarios') }}" method="post">
                @csrf
                        <h4 class="titleform">Registro de Usuario</h4>
                        <input class="controls"  type="number" name="cedula" id="cedula" value="{{ old('cedula') }}" placeholder="ingrese el numero de cédula" maxlength="10" >
                        <input class="controls"  type="password" name="clave" id="clave" value="{{ old('clave') }}" placeholder="ingrese el password" >
                        <input class="controls"  type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="ingrese el nombre" >
                        <input class="controls"  type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" placeholder="ingrese el apellido" >
                        <input class="controls"  type="text" name="genero" id="genero" value="{{ old('genero') }}" placeholder="ingrese el género" >
                        <input class="controls"  type="email" name="correo" id="correo" value="{{ old('correo') }}" placeholder="ingrese el correo" >
                        <input class="btn-buttons"  type="submit" name="accion" value="Registrar">
                        <input class="btn-buttons"  type="reset" value="Nuevo">
                    </form>
                </center>
            </div>
        </div>
    </div>



</body>
</html>
