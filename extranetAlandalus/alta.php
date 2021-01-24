<!--Archivo que gestiona los altas de los alumnos desde perfilProfesor.php-->
<?php
include("conexionesBD/config.php");
include("conexionesBD/conexionbd.php");

session_start();

if(isset($_POST['nombre']) && isset($_POST['apellidos'])){

//DATOS RECOGIDOS DEL FORMULARIO

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$telefono = intval($_POST["telefono"]);
$curso = $_SESSION['usuario']['curso'];

//Consultamos el número de registros para establecer un id consecutivo cuando realicemos el INSERT con los datos del alumno
$numeroRegistros = "SELECT count(*) 'ultimo' FROM ies_alumno";
$datos=$bd->query($numeroRegistros);
$ultimoRegistro = $datos->fetch_object();

$ultimo = intval($ultimoRegistro->ultimo);
$proximo =$ultimo + 3; //El primer registro de la BBDD comienza en 2 así que sumamos tres para obtener el consecutivo al último registro

//REALIZAMOS LA INSERCIÓN DE DATOS EN LA BBDD
$altaAlumno = "INSERT INTO ies_alumno VALUES ($proximo, concat(concat('@','$nombre'),$proximo), '25d55ad283aa400af464c76d713c07ad', '$nombre', '$apellidos', $telefono, '$email', $curso, 1)";

}else{

    echo '<div class="mx-auto" style="width: 35rem;">
    <div class="card-body">
    <h5 class="card-header text-center">¡No ha rellenado los campos requeridos!</h5>
    <a href="'.$_SERVER["HTTP_REFERER"].'>">Volver a formulario</a>
    </div>
    </div>';
};


?>

<!--DEVOLVEMOS MENSAJE DE CONFIRMACIÓN O ERROR-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExtranetAlandalus/DWES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body><?php

    if(isset($_POST["nombre"])){

    if ($bd->query($altaAlumno) === TRUE) {
    
        echo '<div class="mx-auto" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-header text-center">¡Alta completada con éxito!</h5>
        <p class="card text-center">'.$nombre.'  '.$apellidos.' dad@ de alta correctamente</p>
        <a href="'.$_SERVER["HTTP_REFERER"].'>">Volver a formulario</a>
        </div>
        </div>';
    } else {

        echo '<div class="mx-auto" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-header text-center">¡ERROR!</h5>
        <p class="card text-center">El alumno: '.$nombre.'  '.$apellidos.' NO HA SIDO DADO DE ALTA EN EL SISTEMA. ERROR:'.$bd->error.'</p>
        </div>
        </div>';
    };
    };
    
    ?>
    </body>
    </html>
