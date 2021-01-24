<!--Este archivo muestra cabecera con datos del usuario y nos enlaza con perfilAlumno.php o perfilProfesor.php según usuario introducido en index.php-->

<?php
    include_once("../conexionesBD/config.php");
    include_once("../conexionesBD/conexionbd.php");
    include_once("../consultas.php");
    include_once("../funciones.php");
    
    if(!isset($_SESSION['usuario'])){

        header('location:destruirSesion.php');
      };      
      
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExtranetAlandalus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../estilos2.css" type="text/css"> 
</head>
<body>
   

    <header><?php echo '<div class="horayfecha">Fecha: '.$_SESSION['fecha'].' '.'Hora de acceso: '.$_SESSION['hora'].'</div>'; mostrarMensajeOK("1", $_SESSION['usuario']['nombre'], $_SESSION['usuario']['perfil']); ?></header>

    <div class="titulo">DATOS IES AL-ANDALUS</div>
    <div class="contenedor">
    
        <?php

        //Tras recibir las variables de index.php podremos decidir que código incluir

        
        if($_SESSION['usuario']['perfil']==="PROFESOR"){
            
            include("perfilProfesor.php");

        }else if($_SESSION['usuario']['perfil']==="ALUMNO"){ 

            include("perfilAlumno.php");

        }else{

            redireccionar('destruirSesion.php');
        };
        
        ?>
       
    </div>
</body> 
</html>
<?php
    include("../conexionesBD/desconectadb.php"); //Nos aseguramos de cerrar la BBDD
?>