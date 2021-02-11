<!--Este archivo muestra menú que redirige a distintos datos de la BBDD y los muestra en forma de tabla-->

<?php
 include("../conexionesBD/config.php");
 include("../conexionesBD/conexionbd.php");

$cabeceras_alumnos = ["id", "usuario", "nombre", "apellidos", "tlf", "email", "curso", "activo", "baja"];
$cabeceras_cursos = ["id", "nombre"];
$cabeceras_trimestres = ["id", "nombre", "evaluación", "orden"];

if(!isset($_SESSION['usuario'])){

 header('location:destruirSesion.php');
 
};


?>

<!--Desde este menú accederemos a las distintas tablas. El paso de párametros es necesario para continuar mostrando al usuario su nombre y perfil-->
<ul class="nav nav-tabs">
        
        <li style="nav-item ">
          <?php
              if(isset($_GET["datos"])){
                  if ($_GET["datos"] == "alumnos") {

                    //Solo a los profesores que sean tutores les aparecerá la opción a matricular alumnos

                    if($_SESSION['usuario']['perfil']='PROFESOR'){

                      echo '<a href="controlSesiones.php?alta=true"><button type="button" class="btn btn-outline-info">NUEVA ALTA</button></a>';
                    };
                    
                  };                
              };
          ?>
        </li>
      </ul>
      <div style="height:30px;"></div>

    <div class="table-responsive-sm"> 
     <table class="table table-sm table-hover table-borderless" class="table align-middle">
      <thead class="thead-light">
        <tr>
          <?php

            if(isset($_GET["datos"])){
            
              if ($_GET["datos"] == "alumnos") {
                if(!isset($_GET["id_Alumno"])){
                  titulosColumnas($cabeceras_alumnos);
                }; 
                } elseif ($_GET["datos"] == "cursos") {
                  
                  titulosColumnas($cabeceras_cursos);

                } elseif ($_GET["datos"] == "trimestres") {
                  
                  titulosColumnas($cabeceras_trimestres);
              };
            }else{
              

              if(isset($_GET["alta"])){

                if($_SESSION['usuario']['curso'] == 0){

                  echo '<div class="mx-auto" style="width: 35rem;">
                  <div class="card-body">
                  <h5 class="card-header text-center">¡No tiene permisos para esta opción al no ser profesor tutor!</h5>
                  </div>
                  </div>';
                  
              
                }else{
               
                echo '
                <form action="../alta.php" method="POST">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre"  placeholder="Escribir nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribir apellidos completos" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email name="email">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="telefono">Teléfono</label>
                      <input type="number" class="form-control" id="telefono" name="telefono">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Dar de alta</button>
                </form>';
                }; 
              }else{

              //Mientras no se muestren datos ni formularios añadiremos un mensaje y una imagen decorativa:
                echo "</br>";
                echo '<div class="text-center"><img src="../img/escudo.jpg" class="rounded" alt="imagen escudo IES Alandalus"></div>';
              };
            };
          
           
          ?>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <?php

          if(isset($_GET["datos"])){
              if ($_GET["datos"] == "alumnos") {

                if(isset($_GET["id_Alumno"])){
                  
                  include("../baja.php");
                }else{
                 obtenerRegistrosEnColor($consultaAlumnos, 8, 0, "#56C3C5");

               };
                  
                } elseif ($_GET["datos"] == "cursos") {
                  
                  obtenerRegistros($consultaCursos,8);

                } elseif ($_GET["datos"] == "trimestres") {
                  
                  obtenerRegistros($consultaTrimestres,8);
              }
          }

          ?>
      </tr>
    </tbody>
   </table>
  </div>
  

