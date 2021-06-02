<!--Este archivo muestra menú NAV que redirige a distintos datos de la BBDD y los muestra en forma de tabla, si se pulsa en 'alumnos' se añadirá un botón de acceso a un formulario para dar de alta a nuevos alumnos. Solo se podrá usar si el profesor es tutor de algún módulo-->

<?php
 include("../conexionesBD/config.php");
 include("../conexionesBD/conexionbd.php");
 require_once('../autoload.php');
 autoload(null);

$cursoProfesor = $_SESSION['usuario']['curso'];


$cabeceras_alumnos = ["id", "usuario", "nombre", "apellidos", "tlf", "email", "curso", "activo", "baja"];
$cabeceras_cursos = ["id", "nombre"];
$cabeceras_trimestres = ["id", "nombre", "evaluación", "orden"];
$cabeceras_evaluacion = ["id","nombre", "apellidos","curso", "asignatura", "mod.notas"];

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
                
                } elseif ($_GET["datos"] == "evaluacion") {
                  
                  titulosColumnas($cabeceras_evaluacion);
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
                

              }else if(isset($_GET["notificacion"])){

                include("../notificaciones.php"); 
              
              }elseif(isset($_GET['evaluacion'])){

                include("../evaluaciones.php");


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
                                   
                  /*--------------------PAGINACIÓN ALUMNOS------------------------*/

                 if($_GET['pagina']){
                
                  $numeroRegistros = mysqli_num_rows($consultaAlumnos);
                  $numeroRegistrosPorPagina = 20;
                  $numeroBotonesPaginacion = ceil($numeroRegistros/$numeroRegistrosPorPagina);
                  
                  if(($_GET['pagina']>$numeroBotonesPaginacion)||($_GET['pagina']<1)){ 

                  
                    header('location: ../sesiones/controlSesiones.php?datos=alumnos&pagina=1');
                  };
                
                  $iniciar = ($_GET['pagina']-1)*$numeroRegistrosPorPagina;
                  $final = $numeroRegistrosPorPagina;

                  
                  
                  //CONSULTA PREPARADA PARA DAR USO A LA PAGINACIÓN

                    $sql = "SELECT * FROM ies_alumno LIMIT ?,?";
                    $stmt=$bd->prepare($sql);
                    $stmt->bind_param("ii", $iniciar, $final);
                    $stmt->execute();

                    $rs = mysqli_stmt_bind_result($stmt, $id, $usuario, $pass, $nombre, $apellidos, $telefono, $email, $curso, $activo);
                    $stmt->store_result();
                    
                    while((mysqli_stmt_fetch($stmt))){

                      echo "<tr>";
                  
                      for($i=0; $i<1;$i++){

                        if($activo==1){
                        
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$id</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$usuario</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$nombre</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$apellidos</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$telefono</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$email</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$curso</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$activo</td>";
                          echo '<td><a href="controlSesiones.php?datos=alumnos&id_Alumno='.$id.'&apellidos='.$apellidos.'&nombre_Alumno='.$nombre.'"><button type="button" class="btn btn-outline-info" style="margin:auto">x</button></a></td>';
                        }else{

                          echo "<td class='text-muted' style='vertical-align:middle;'>$id</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$usuario</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$nombre</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$apellidos</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$telefono</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$email</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$curso</td>";
                          echo "<td class='text-muted' style='vertical-align:middle;'>$activo</td>";
                          echo '<td><button type="button" class="btn btn-outline-warning disabled" style="margin:auto">-</button></a></td>';


                        }
                      
                      };
                    };
                      echo"</tr>";

                    mysqli_stmt_close($stmt);

                 //obtenerRegistrosEnColor($consultaAlumnos, 8, 0, "#56C3C5");
                  
                 
                  

                    include('paginacion.php');
                  };
                };
               
                /*-------------------FIN PAGINACIÓN--------------------------------*/
                  
                } elseif ($_GET["datos"] == "cursos") {
                  
                  if($consultaCursos){
                
                    while($consultaCurso = $consultaCursos->fetch_object()){
    
                      $Cursos[] = new Curso($consultaCurso->id, $consultaCurso->nombre);
                      
                    };
                    mysqli_free_result($consultaCursos);
    
                    
    
                  };
                  foreach ($Cursos as $curso) {
                 
                    echo "<tr>";
  
                      $curso->listarDatosId();
                      $curso->listarDatosNombre();
                    
                    echo "</tr>";
                  };
                  

                } elseif ($_GET["datos"] == "trimestres"){
                  
                  if($consultaTrimestres){
                
                    while($consultaTrimestre = $consultaTrimestres->fetch_object()){
    
                      $trimestres[] = new Trimestre($consultaTrimestre->id, $consultaTrimestre->nombre, $consultaTrimestre->nombre2, $consultaTrimestre->orden,);
                      
                    };
                    mysqli_free_result($consultaTrimestres);
    
                    
    
                  };
                  foreach ($trimestres as $trimestre) {
                 
                    echo "<tr>";
  
                     $trimestre->listarDatosEnPantalla();
                    
                    echo "</tr>";
                  };
                  
              }elseif($_GET["datos"] == "evaluacion"){

                $consultaAlumnosProf = $bd->query( "SELECT * FROM ies_alumno WHERE curso = $cursoProfesor");
                $consultaNotas = $bd->query( "SELECT * FROM ies_notas");

                if($consultaAlumnosProf){
                
                  while(($consultaAlumnosP = $consultaAlumnosProf->fetch_object())&&($consultaNotasP = $consultaNotas->fetch_object())){

                    // Solo se listarán los alumnos pertenecientes al curso del profesor y que esten activos
                    if($consultaAlumnosP->activo){

                      echo "<tr>";
                  
                      for($i=0; $i<1;$i++){

                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$consultaAlumnosP->id</td>";
                         
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$consultaAlumnosP->nombre</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$consultaAlumnosP->apellidos</td>";                        
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$consultaAlumnosP->curso</td>";
                          echo "<td style='vertical-align:middle; style=color:'#56C3C5'>$consultaNotasP->asignatura</td>";
                          echo '<td><a href="../evaluaciones.php?evaluacion=true&datos=alumnos&id_Alumno='.$consultaAlumnosP->id.'&apellidos='.$consultaAlumnosP->apellidos.'&nombre_Alumno='.$consultaAlumnosP->nombre.'"><button type="button" class="btn btn-outline-info" style="margin:auto">!</button></a></td>';
                        }
                    };
                    
                    
                  };
                  mysqli_free_result($consultaAlumnosProf);
  
                  
  
                };


              };
              
            
          }

        

          ?>
      </tr>
    </tbody>
   </table>
  </div>



