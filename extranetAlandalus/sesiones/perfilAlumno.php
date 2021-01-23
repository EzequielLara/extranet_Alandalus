<!--Este archivo se encarga de mostrar un menú que redirige a distintos datos del alumno y los muestra en forma de tabla-->
<?php

include("../conexionesBD/config.php");
include('../conexionesBD/conexionbd.php');


if(!isset($_SESSION['usuario'])){

  header('location:destruirSesion.php');
}

//Arrays con los nombres de las cabeceras de las columnas de las distintas tablas que se mostrarán en pantalla.

$cabeceras_alumnos = ["id", "usuario", "contraseña", "nombre", "apellidos", "teléfono", "email", "curso", "activo"];
$cabeceras_asignaturas = ["cod.asignatura", "asignatura", "abreviatura", "curso"];
$cabeceras_curso = ["id.curso", "curso"];

?>

  <!--Desde este menú accederemos a las distintas tablas gracias al paso de párametros necesarios para realizar las consultas dinámicas ya que a cada usuario con perfil de alumno se le mostrará un contenido diferente.Los parámetros nombre y perfil tambien son necesarios pasarlos si queremos continuar mostrando, en la parte superior de la página, dichos datos.-->
  <ul class="nav nav-tabs">
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?opcion=alumnos">Alumno</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?opcion=asignaturas">Asignaturas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?opcion=curso">Curso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="destruirSesion.php">Salir</a>   
          </li>
      </ul>
    <table class="table">
      <thead>
        <tr>
          <?php

          //CONSULTAS (dinámicas) DEL PERFIL DE ALUMNO (cada alumno obtendrá resultados diferentes)

            $id =intval($_SESSION['usuario']['id']);
            $nombre = $_SESSION['usuario']['nombre'];
            $curso = intval($_SESSION['usuario']['curso']);
            

            $consAlumno= $bd->query( "SELECT * FROM ies_alumno WHERE id = $id");
            $consAsignaturas= $bd->query( "SELECT * FROM ies_asignatura WHERE curso = $curso");
            $consCurso= $bd->query( "SELECT * FROM ies_curso WHERE id = $curso");

            if(isset($_GET["opcion"])){

          //MOSTRAMOS LOS TÍTULOS DE LAS COLUMNAS
              if ($_GET["opcion"] == "alumnos"){

                  titulosColumnas($cabeceras_alumnos); //estas funciones las encontraremos en el archivo consultas.php
                  
              } elseif($_GET["opcion"] == "asignaturas"){
                  
                  titulosColumnas($cabeceras_asignaturas);

              } elseif($_GET["opcion"] == "curso"){
                  
                  titulosColumnas($cabeceras_curso);
              };

            }else{
               // Este texto con imagen se mostrará antes de haber pulsado cualquier opción de la barra de menú. Una vez pulsado cualquier opción desaparecerá.
                echo "</br>";
                echo '<div class="alert alert-warning" role="alert">Para comenzar seleccione en el menú los datos que desea consultar o pulse la opción de salir.</div>';
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
                
                obtenerRegistros($consAlumno); // Estas funciones las encontraremos en consultas.php
                  
              } elseif ($_GET["opcion"] == "asignaturas") {
                  
                obtenerRegistros($consAsignaturas);

              } elseif ($_GET["opcion"] == "curso") {
                
                obtenerRegistros($consCurso);
              };
            };

          ?>
      </tr>
    </tbody>
  </table>

