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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilos/estilos2.css" type="text/css"> 
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="destruirSesion.php">
      <img src="../img/escudo.jpg" alt="" width="85" class="d-inline-block align-top">
      Extranet Alandalus
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['datos']=='alumnos'){echo 'active';}?>" aria-current="page" href="controlSesiones.php?datos=alumnos">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['datos']=='cursos'){echo 'active';}?>" href="controlSesiones.php?datos=cursos">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['datos']=='trimestres'){echo 'active';}?>" href="controlSesiones.php?datos=trimestres">Trimestres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="destruirSesion.php" tabindex="-1" aria-disabled="true">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container">   
    <div class="row">
        <div class="col">
            <div class="alert" role="alert">
              <p class="text-secondary">USUARIO: <?php echo $_SESSION['usuario']['nombre'];?></p>
               </div>
            </div>
            <div class="col">
              <div class="alert"  role="alert">
               <p class="text-secondary">PERFÍL:<span class="text-primary"> <?php echo $_SESSION['usuario']['perfil'];?></span></p>
               </div>
            </div>
            <div class="col">
                <div class="alert alert-light" role="alert"><?php echo '<p class="text-center">Login: '.$_SESSION['fecha'].' '.'|'.' '.$_SESSION['hora'].'</p>'; ?>
            </div>
        </div>
    </div>
</div>
    
    <div class="container">   
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
    <footer class="card-footer p3 p-pmd-5 mt-5 bg-light text-center text-sm-start">Desarrollado por <a href ="https://github.com/EzequielLara" target = "_blank">EzequielLara@github.com</a><span> feb-2021</span></footer>
</body> 
</html>
<?php
    include("../conexionesBD/desconectadb.php"); //Nos aseguramos de cerrar la BBDD
?>