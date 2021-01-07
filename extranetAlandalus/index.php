<!--Pppagina de inicio que muestra un formulario de acceso. Si se valida el acceso se nos redirigirá a controlSesiones.php.-->

<?php
    include("conexionesBD/config.php");
    include("conexionesBD/conexionbd.php");
    include("funciones.php");
    

   if(isset($_POST["usuario"])){

       if(($_POST["usuario"] == "") || ($_POST["password"] == "")){
           
            redireccionar("index.php?error=1");

       }else{

            $usuario = htmlspecialchars($_POST["usuario"], ENT_QUOTES);
            $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

            //consultamos a la base de datos si los valores introducidos corresponden a un usuario con perfil de alumno o de profesor para redireccionar a controlSesiones.php con unas variables concretas u otras.

            $consultaProfesor = "SELECT nombre FROM ies_profesor WHERE usuario = '".$usuario."' AND pass = '".$password."' LIMIT 0,1;";

            $consultaAlumno = "SELECT nombre, id, curso FROM ies_alumno WHERE usuario = '".$usuario."' AND pass = '".$password."' LIMIT 0,1;";

            if($respuesta = $bd->query($consultaProfesor)){

             $profesor = $respuesta->fetch_object();

             if($profesor != null){

                    redireccionar("sesiones/controlSesiones.php?nombre=".$profesor->nombre."&perfil=PROFESOR");
            }else{

                if($respuesta = $bd->query($consultaAlumno)){

                    $alumno = $respuesta->fetch_object();

                    if($alumno != null){
                            redireccionar("sesiones/controlSesiones.php?nombre=".$alumno->nombre."&perfil=ALUMNO&curso=".$alumno->curso."&id=".$alumno->id);
                    }else{
                    //Si el usuario introducido no existe en la BBDD redireccionamos nuevamente al formulario con un mesaje de error. 
                               
                        redireccionar("index.php?error=2");
                    };
                };       
            };
            };
        };
};  
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExtranetAlandalus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<<<<<<< HEAD
    <link rel="stylesheet" href="estilos.css" type="text/css">
    
=======
    <link rel="stylesheet" type="text/css" href="estilos.css">

    <style>
       
       
    </style>
>>>>>>> main
</head>
<body>
    <div class="content">
        <h2> IES AL-ANDALUS</h2>
        <img src="img/escudo.jpg" width="250" height="250" alt="imagen escudo IES Alandalus">
        <h5><b>Iniciar sesión</b></h5>
        <?php
         if(isset($_GET["error"])){mostrarMensajeERR($_GET["error"]);};
         ?>
        <form class="formulario" action="index.php" method="POST">
            <div class="form-group">
                <label><b>Usuario:</b></label>
                <input  type="nombre" name="usuario" class="form-control" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <label><b>Contraseña:</b></label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>  
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>   
</body>
</html>