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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <nav class="navbar " style="position:static !important">
                                <a diseable class="navbar-brand">LISTA DE VEHICULOS</a>
                                <form action="{{ url('Vehiculos/show') }}" method="get">
                                    <input class="form-control mr-sm-2" type="search" name="placa" placeholder="INGRESA PLACA" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </nav>
                        </div>
                    </div>
                </div>
                <center>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Version</th>
                                <th>Color</th>
                                <th># Puestos</th>
                                <th># Puertas</th>
                                <th>Combustible</th>
                                <th>Kilometros</th>
                                <th>Cilindraje</th>
                                <th>Categoria</th>
                                <th>Editar</th>
                                <th>Eliminar</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $data_vehi)
                            <tr>
                                <td>{{$data_vehi->id}}</td>
                                <td>{{$data_vehi->placa}}</td>
                                <td>{{$data_vehi->marca}}</td>
                                <td>{{$data_vehi->modelo}}</td>
                                <td>{{$data_vehi->version}}</td>
                                <td>{{$data_vehi->color}}</td>
                                <td>{{$data_vehi->numPuestos}}</td>
                                <td>{{$data_vehi->numPuertas}}</td>
                                <td>{{$data_vehi->combustible}}</td>
                                <td class="currency">{{$data_vehi->kilometros}}</td>
                                <td>{{$data_vehi->cilindraje}}</td>
                                <td>{{$data_vehi->categoria}}</td>
                                <td><a type="button" href="{{ url('Vehiculos/' .$data_vehi->id. '/edit') }}" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td>
                                    <form action="{{ url('Vehiculos/' .$data_vehi->id) }}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </center>
            </section>
        </div>

    </div>

</body>

</html>
