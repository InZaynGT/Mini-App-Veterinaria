<?php
include "MascotaModel.php";
$nuevoEstudiante = new Mascota();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarMascota($_POST['nombre']);
    header('Location: listarmascota.php');
}
/*EDITAR*/
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarMascota($_POST['id'],$_POST['nombre']); 
 header('Location: listarmascota.php');
        
}
else
if(isset($_POST['btnAgregar']))
{
    $nuevoEstudiante->AgregarVacuna($_POST['id'],$_POST['vacuna']);
    header('Location: listarmascota.php');
}


