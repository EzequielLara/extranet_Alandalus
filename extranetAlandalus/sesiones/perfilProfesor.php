<!--Este archivo muestra menú NAV que redirige a distintos datos de la BBDD y los muestra en forma de tabla, si se pulsa en 'alumnos' se añadirá un botón de acceso a un formulario para dar de alta a nuevos alumnos. Solo se podrá usar si el profesor es tutor de algún módulo-->

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

<!--Desde este menú accederemos a las distintas tablas.-->
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

                  /*SI NO ES UN PROFESOR TUTOR SE IMPRIME ESTE ROTULO*/ 
                  echo '<div class="mx-auto" style="width: 35rem;">
                  <div class="card-body">
                  <h5 class="card-header text-center">¡No tiene permisos para esta opción al no ser profesor tutor!</h5>
                  </div>
                  </div>';

                }else{
                /*FORMULARIO DE NUEVA ALTA*/ 
                echo '
                <form action="../alta.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre"  placeholder="Escribir nombre" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribir apellidos completos" required>
                  </div>
                </div>
                  
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email name="email">
                    </div>
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

          /*PINTAMOS LOS DATOS DE LA BBDD DEPENDIENDO DEL ELEMENTO DEL NAV SELECCIONADO*/

          if(isset($_GET["datos"])){
              if ($_GET["datos"] == "alumnos") {

                if(isset($_GET["id_Alumno"])){
                  
                  include("../baja.php");
                }else{
                                   
                  /*--------------------PAGINACIÓN------------------------*/

                 if($_GET['pagina']){
                
                  $numeroRegistros = mysqli_num_rows($consultaAlumnos);
                  $numeroRegistrosPorPagina = 20;
                  $numeroBotonesPaginacion = ceil($numeroRegistros/$numeroRegistrosPorPagina);
                  
                  if(($_GET['pagina']>$numeroBotonesPaginacion)||($_GET['pagina']<1)){ 

                  
                    header('location: ../sesiones/controlSesiones.php?datos=alumnos&pagina=1');
                  };
                
                  $iniciar = ($_GET['pagina']-1)*$numeroRegistrosPorPagina;
                  
                  //FALTA CONSULTA PREPARADA PARA DAR USO A LA PAGINACIÓN

              
                  
                 
                  obtenerRegistrosEnColor($consultaAlumnos, 8, 0, "#56C3C5");
                  
                 
                  

                    include('paginacion.php');
                  }
                };
               
                /*-------------------FIN PAGINACIÓN--------------------------------*/
                  
                } elseif ($_GET["datos"] == "cursos") {
                  
                  obtenerRegistros($consultaCursos,8);

                } elseif ($_GET["datos"] == "trimestres"){
                  
                  obtenerRegistros($consultaTrimestres,8);
              }
          }

          ?>
      </tr>
    </tbody>
   </table>
  </div>



