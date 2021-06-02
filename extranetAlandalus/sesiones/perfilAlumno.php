<!--Este archivo se encarga de mostrar un menú que redirige a distintos datos del alumno y los muestra en forma de tabla-->
<?php

include("../conexionesBD/config.php");
include('../conexionesBD/conexionbd.php');
require_once('../autoload.php');
autoload(null);




if(!isset($_SESSION['usuario'])){

  header('location:destruirSesion.php');
}

//Arrays con los nombres de las cabeceras de las columnas de las distintas tablas que se mostrarán en pantalla.

$cabeceras_alumnos = ["id", "usuario", "nombre", "apellidos", "teléfono", "email", "curso", "activo"];
$cabeceras_asignaturas = ["cod.asignatura", "asignatura", "abreviatura", "curso"];
$cabeceras_curso = ["id.curso", "curso"];
$cabeceras_notas = ["curso", "asignatura", "profesor", "trimestre", "nota"];

?>
     <hr></hr>
     <div class="table-responsive-sm"> 
     <table class="table table-sm table-hover table-borderless">
      <thead class="thead-light">
        <tr>
          <?php

          //CONSULTAS (dinámicas) DEL PERFIL DE ALUMNO (cada alumno obtendrá resultados diferentes)

            $idAlumno =intval($_SESSION['usuario']['id']);
            $nombreAlumno = $_SESSION['usuario']['nombre'];
            $cursoAlumno = intval($_SESSION['usuario']['curso']);
            

            if($consAlumnos= $bd->query( "SELECT * FROM ies_alumno WHERE id = $idAlumno LIMIT 0,1")){
              //Consultamos los datos del alumno a la BBDD
              $consAlumno = $consAlumnos->fetch_object();
              mysqli_free_result($consAlumnos);
              
              //Cargamos el curso del Alumno
              if($consCursos= $bd->query( "SELECT * FROM ies_curso WHERE id = $cursoAlumno")){
                
                $consCurso =$consCursos->fetch_object();
                $curso = new Curso($consCurso->id, $consCurso->nombre);
                mysqli_free_result($consCursos);

               };

              //Cargamos las asignaturas del Alumno
              
              if($consAsignaturas= $bd->query( "SELECT * FROM ies_asignatura WHERE curso = $cursoAlumno")){
                
                while($consAsignatura =$consAsignaturas->fetch_object()){

                  $Asignaturas[] = new Asignatura($consAsignatura->id, $consAsignatura->nombre, $consAsignatura->nombre_corto);
                  
                };
                mysqli_free_result($consAsignaturas); 

              };
              //Cargamos las notas del Alumno
              
              if($consNotas= $bd->query( "SELECT * FROM ies_notas WHERE alumno = $idAlumno ORDER BY trimestre ASC")){
               
 
                while($consNota = $consNotas->fetch_object()){

                  $notas[] = new Notas($consNota->alumno, $consNota->curso, $consNota->asignatura, $consNota->profesor, $consNota->trimestre, $consNota->nota);

                  
                };

                mysqli_free_result($consNotas);             
            
              }else{echo "no hay registros";};
              
              
              //Creamos la instancia de la clase Alumno

             
                $alumno = new Alumno ($consAlumno->id, $consAlumno->usuario, $consAlumno->pass, $consAlumno->nombre, $consAlumno->apellidos, $consAlumno->telefono, $consAlumno->email, $curso, $consAlumno->activo, $Asignaturas);
              
              
            };
            

            if(isset($_GET["opcion"])){

          //MOSTRAMOS LOS TÍTULOS DE LAS COLUMNAS
              if ($_GET["opcion"] == "alumnos"){

                  titulosColumnas($cabeceras_alumnos); //estas funciones las encontraremos en el archivo consultas.php
                  
              } elseif($_GET["opcion"] == "asignaturas"){
                  
                  titulosColumnas($cabeceras_asignaturas);

              } elseif($_GET["opcion"] == "curso"){
                  
                  titulosColumnas($cabeceras_curso);
              
              } elseif($_GET["opcion"] == "notas"){
                  
                  titulosColumnas($cabeceras_notas);
              };

            }else if(isset($_GET["notificacion"])){

              include("../notificaciones.php"); 
            
            }else{
               // Este texto con imagen se mostrará antes de haber pulsado cualquier opción de la barra de menú. Una vez pulsado cualquier opción desaparecerá.
                echo "</br>";
            
                echo '<div class="text-center" style= "opacity: 0.4"><img src="../img/escudo.jpg" class="rounded" alt="imagen escudo IES Alandalus"></div>';
            };
           
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php

            if(isset($_GET["opcion"])){

          //MOSTRAMOS EL CONTENIDO DE LAS CONSULTAS
              if ($_GET["opcion"] == "alumnos") {
                
                echo "<tr>";

                  $alumno->listarDatosEnPantalla(); // Estas funciones son métodos de las clases que encontraras en la carpeta clases.

                echo "</tr>";
                  
              } elseif ($_GET["opcion"] == "asignaturas") {
                 
                foreach ($Asignaturas as $asignatura) {
                 
                  echo "<tr>";

                    $asignatura->listarDatosEnPantalla();
                    $curso->ListarDatosId();
                  
                  echo "</tr>";
                };
                
            

              } elseif ($_GET["opcion"] == "curso") {
                
                echo "<tr>";
                
                  $curso->listarDatosId();
                  $curso->listarDatosNombre();

                echo "</tr>";

              } elseif ($_GET["opcion"] == "notas") {
                if(isset($notas)){  
                  foreach ($notas as $nota) {
                 
                    echo "<tr>";

                      $nota->listarDatosEnPantalla();
                   
                    echo "</tr>";
                  };
                }else{
                  for($i=0; $i<=4; $i++){
                   echo "<td>";
                 
                    echo "Sin datos";
                  
                   echo "</td>";
                  };
                };
              };
            };

          ?>
      </tr>
    </tbody>
  </table>

