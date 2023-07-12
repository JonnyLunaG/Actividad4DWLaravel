<?php
   
    session_start();
    include_once '../../model/entidades/Vehiculo.php';
    $vehi = @$_SESSION["vehiculo"];
    $vehi = @unserialize($vehi);
    //var_dump($vehi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consultStyle.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>CONSULTAR VEHICULOS</title>
</head>
<body>
    <div id="contenedor">
        <header class="encabezado">
            <div class="ancho">
                <div class="logo">
                    <p>TodoVehículos</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="../usuarios/logout.php">Salir</a></li>
                        <li><a href="../index.php">Usuarios</a>
                            <ul>
                                <li><a href="../usuarios/registrar.php">Registrar</a></li>
                                <li><a href="../usuarios/listar.php">Lista Usuarios</a></li>
                            </ul>
                        </li>
                        <li><a href="../index.php">Vehiculos</a>
                            <ul>
                                <li><a href="agregar.php">Agregar</a></li>
                                <li><a href="consultar.php">Consultar</a></li>
                                <li><a href="editar.php">Editar</a></li>
                                <li><a href="eliminar.php">Eliminar</a></li>
                                <li><a href="listar.php">Lista Vehiculos</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            
        </header>
        <div id="contenido">
            <div id="section">
                <center>
                    <form class="form-consult" action="../../controllers/VehiculosControlador.php" method="POST">
                        <h4 class="titleform">Consultar Vehículos</h4>
                        <ul>
                            <li>
                                <label for="id">Id Vehículo:</label>
                                <input class="controls"  type="number" name="id_vehiculo" value="<?= @$vehi->id_vehiculo ?>" id="id_vehiculo" placeholder="ingrese el Id del Vehículo" required>
                            </li>
                            <li>
                                <label for="placa">Placa:</label>
                                <input class="controls"  type="text" name="placa" value="<?= @$vehi->placa ?>" id="placa" readonly>
                            </li>
                            <li>
                                <label for="marca">Marca:</label>
                                <input class="controls"  type="text" name="marca" value="<?= @$vehi->marca ?>" id="marca" readonly>
                            </li>
                            <li>
                                <label for="usuario_id">Id Usuario:</label>
                                <input class="controls"  type="number" name="usuario_id" value="<?= @$vehi->usuario_id ?>" id="usuario_id"  readonly>
                            </li>
                        </ul>
                        <input class="btn-buttons"  type="hidden" name="pagina" value="consultar">
                        <input class="btn-buttons"  type="submit" name="accion" value="Consultar">
                        
                    </form>
                    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
                </center>
            </div>
        </div>
        <div id="footer">footer</div>
    </div>
</body>
    