<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="">HOME</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="agregarmascota.php">Agregar Mascota</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="listarmascota.php">Listar Mascotas</a></li>
            </ul>

        </nav>
    </div>
    <form action="mascotacontroller.php" method="POST">
                        <?php
                            include_once "MascotaModel.php";
                            $nuevoEstudiante = new Mascota();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarMascota($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
    <p>
        <h2 style="text-align: center">AGREGAR VACUNAS</h2>
    </p>
    <form {margin: 0 auto;} action="mascotacontroller.php" method="post">
        <p>
            <label for="id">Id:</label>
            <input type="text" class = "form-control" name="id" value="<?php echo $resultadoFiltrado['id']?>" readonly="readonly">
        </p>
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" class = "form-control" name="nombre" value="<?php echo $resultadoFiltrado['nombre']?>" readonly="readonly">
        </p>
        <p>
            <label for="vacuna">Vacuna:</label>
            <input type="text" class = "form-control" name="vacuna">
        </p>                            
        <p>
            <input type="submit" class = "form-control" value="AGREGAR VACUNA" name = "btnAgregar">
        </p>
                        <?php
                            }
                        ?>
    </form>
</body>
</html>