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
   <title>LISTADO DE USUARIOS</title>
</head>

<body>
    <div id="contenedor">
        <?php
        include 'includes/headerindex.php';
        ?>
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
                <h1>LISTA DE USUARIOS</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>GENERO</th>
                            <th>EMAIL</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $data_usr)
                        <tr>
                            <td>{{$data_usr->id}}</td>
                            <td>{{$data_usr->cedula}}</td>
                            <td>{{$data_usr->nombre}}</td>
                            <td>{{$data_usr->apellido}}</td>
                            <td>{{$data_usr->genero}}</td>
                            <td>{{$data_usr->email}}</td>
                                <td>
                                <form action="{{ url('Usuarios/' .$data_usr->id) }}" method="post">
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



</body>

</html>
