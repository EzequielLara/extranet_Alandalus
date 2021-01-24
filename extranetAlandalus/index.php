<!--Página de inicio que muestra un formulario de acceso. Si se valida el acceso se nos redirigirá a controlSesiones.php.-->

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

            //Declaramos la session que contendrá los datos del usuario
            session_start();
    
            $_SESSION['usuario'] = array();
            $_SESSION['hora'] = date("H:i:s"); 
            $_SESSION['fecha'] = date("d/m/y");
            
        
            //consultamos a la base de datos si los valores introducidos corresponden a un usuario con perfil de alumno o de profesor para redireccionar a controlSesiones.php.

            $consultaProfesor = "SELECT nombre FROM ies_profesor WHERE usuario = '".$usuario."' AND pass = '".$password."' LIMIT 0,1;";

            $consultaAlumno = "SELECT nombre, id, curso FROM ies_alumno WHERE usuario = '".$usuario."' AND pass = '".$password."' LIMIT 0,1;";

            if($respuesta = $bd->query($consultaProfesor)){

             $profesor = $respuesta->fetch_object();

             if($profesor != null){
                    //Inicilizamos la variable de sesion declarada con anterioridad con los datos del profesor y redireccionamos 
                    $_SESSION['usuario']['perfil'] = "PROFESOR";
                    $_SESSION['usuario']['nombre'] = $profesor->nombre;

                    redireccionar("sesiones/controlSesiones.php");
            }else{

                if($respuesta = $bd->query($consultaAlumno)){

                    $alumno = $respuesta->fetch_object();

                    if($alumno != null){
                        //Inicilizamos la variable de sesion declarada con anterioridad con los datos del alumno y redireccionamos
                        $_SESSION['usuario']['perfil'] = "ALUMNO";
                        $_SESSION['usuario']['nombre'] = $alumno->nombre;
                        $_SESSION['usuario']['id'] = $alumno->id;
                        $_SESSION['usuario']['curso'] = $alumno->curso;


                        redireccionar("sesiones/controlSesiones.php");
                    }else{
                    //Si el usuario introducido no existe en la BBDD redireccionamos nuevamente al formulario con un mesaje de error pero antes destruimos las sesiones creadas que pudiesen haber.
                        
                        session_unset(); 
                    
                        session_destroy();
                
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
    <link rel="stylesheet" href="estilos.css" type="text/css">
    
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