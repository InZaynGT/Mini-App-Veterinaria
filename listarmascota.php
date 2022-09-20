<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="diseño.css" rel="stylesheet">
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
    <p>
        <h2 style="text-align: center">LISTA DE MASCOTAS</h2>
    </p>
    <hr>
    <table class="table table-striped w-50 p-3" border="2">
        <th>Id_Mascota</th>
        <th>Mascota</th>
        <th colspan="2">ACCIONES</th>
    <?php
        include_once "MascotaModel.php";
        $Estudiante = new Mascota();
        $ListaEstudiantes = $Estudiante->ListarMascotas();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['id'] ?> </td>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td style="text-align: left;">
                <a href="agregar.php?idEst=<?php echo $Estudiantes ['id'] ?>"><img alt="agregar" src="agregar.png">
                </td>
                <td style="text-align: left;">
                <a href="editar.php?idEst=<?php echo $Estudiantes ['id'] ?>"><img alt="editar" src="editar.png">
                </td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>
