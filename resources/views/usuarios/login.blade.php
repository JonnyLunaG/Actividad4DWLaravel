<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consultStyle.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>LOGIN DE USUARIOS</title>
</head>
<body>
        <header class="encabezado">
            <div class="ancho">
                <div class="logo">
                    <p>TodoVehículos</p>
                </div> 
                <nav>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="registrar.php">Registrarse</a></li>
                    </ul>
                </nav>
            </div>
            
        </header>

    <div id="contenedor">
        <div id="contenido">
            <div id="section">
                <center>
                    <form class="form-consult" action="../../controllers/UsuarioControlador.php" method="POST">
                        <h4 class="titleform">LOGIN DE USUARIO</h4>
                        <img src="../images/login.png" width="120" heigth="120">
                        
                        <ul>
                            <li>
                                <label for="cedula">Cédula:</label>
                                <input class="controls"  type="number" name="cedula" value="<?= @$user->cedula ?>" id="cedula" placeholder="ingrese el numero de cédula" required/>
                            </li>
                            <li>
                                <label for="password">Password:</label>
                                <input class="controls"  type="password" name="clave" id="clave" value="<?= @$user->clave ?>" required/>
                            </li>
                        </ul>
                        <input class="btn-buttons"  type="submit" name="accion" value="Iniciar" id="accion">
                    </form>
                    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
                </center>
            </div>
        </div>
    </div>
</body>
</html>