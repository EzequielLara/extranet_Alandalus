<!--Este archivo muestra cabecera con datos del usuario y nos enlaza con perfilAlumno.php o perfilProfesor.php según usuario introducido en index.php-->

<?php
    include_once("../conexionesBD/config.php");
    include_once("../conexionesBD/conexionbd.php");
    include_once("../consultas.php");
    include_once("../funciones.php");

    if($_GET["perfil"]&&$_GET["nombre"]){
    $nombre = $_GET["nombre"];
    $perfil = $_GET['perfil'];
    }else{header('location:../index.php');};
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExtranetAlandalus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
</head>
<style>
    .contenedor{
        width: 60%;
        margin: auto;

    }
    td,th,tr{
        text-align:center;
    }
    header{

        text-align: right;
    }
    .titulo{
        width: 60%;
        height:60px;
        margin:auto;
        margin-bottom:25px;
        color:#8A99CF;
        text-align:center;
        font-size:2em;
        
    }
    
</style>
<body>
    <!--Los parámetros pasados por la barra de direcciones con el método GET serán de utilidad para mostrar al usuario su nombre y perfil con el que ha accedido en cada página que se le muestre-->

    <header><?php mostrarMensajeOK("1", $nombre, $perfil);?></header>

    <div class="titulo">DATOS IES AL-ANDALUS</div>
    <div class="contenedor">
    
        <?php

        //Tras recibir las variables de index.php podremos decidir que código incluir

        
        if($_GET["perfil"]==="PROFESOR"){
            
            include("perfilProfesor.php");

        }else{ 

            include("perfilAlumno.php");

        };
        
        ?>
       
    </div>
</body> 
</html>
<?php
    include("../conexionesBD/desconectadb.php"); //Nos aseguramos de cerrar la BBDD
?>