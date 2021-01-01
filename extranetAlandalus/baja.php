<?php

$id_alumno = $_GET['id_Alumno'];
$nombre_alumno = $_GET['nombre_Alumno'];
$apellido_alumno = $_GET['apellidos'];


$bajaAlumno = "UPDATE ies_alumno SET activo = 0 WHERE id = $id_alumno";

    if ($bd->query($bajaAlumno) === TRUE) {
    
        echo '<div class="mx-auto" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-header text-center">¡Baja completada con éxito!</h5>
        <p class="card text-center">'.$nombre_alumno.'  '.$apellido_alumno.' dad@ de baja correctamente</p>
        </div>
        </div>';
    } else {

        echo '<div class="mx-auto" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-header text-center">¡ERROR!</h5>
        <p class="card text-center">El alumno: '.$nombre_alumno.'  '.$apellido_alumno.' NO HA SIDO DADO DE BAJA EN EL SISTEMA. ERROR:'.$bd->error.'</p>
        </div>
        </div>';
    };
?>



