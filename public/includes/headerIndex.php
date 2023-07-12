<header class="encabezado">
    <div class="ancho">
        <div class="logo">
            <div>
                <p>TodoVehículos</p>
            </div>
            <div><span style="color: white;"><?= @$_REQUEST["msj"] ?></span></div>
        </div>
        <nav>
            <ul >
                <li><a href="/">Salir</a></li>
                <li><a href="#">Usuarios</a>
                    <ul>
                        <li><a href="/Usuarios/create">Registrar</a></li>
                        <li><a href="/Usuarios">Lista Usuarios</a></li>
                    </ul>
                </li>
                <li style=" position:relative"><a href="#">Vehiculos</a>
                    <ul>
                        <li><a href="/Vehiculos/create">Agregar</a></li>
                        <li><a href="/Vehiculos">Editar</a></li>
                        <li><a href="/Vehiculos">Eliminar</a></li>
                        <li><a href="/Vehiculos">Lista Vehiculos</a></li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>

</header>
