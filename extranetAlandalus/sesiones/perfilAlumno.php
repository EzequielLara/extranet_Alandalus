<!--Este archivo se encarga de mostrar un menú que redirige a distintos datos del alumno y los muestra en forma de tabla-->
<?php

include("../conexionesBD/config.php");
include('../conexionesBD/conexionbd.php');


if(!isset($_SESSION['usuario'])){

  header('location:destruirSesion.php');
}

//Arrays con los nombres de las cabeceras de las columnas de las distintas tablas que se mostrarán en pantalla.

$cabeceras_alumnos = ["id", "usuario", "nombre", "apellidos", "teléfono", "email", "curso", "activo"];
$cabeceras_asignaturas = ["cod.asignatura", "asignatura", "abreviatura", "curso"];
$cabeceras_curso = ["id.curso", "curso"];

?>
     <hr></hr>
     <div class="table-responsive-sm"> 
     <table class="table table-sm table-hover table-borderless">
      <thead class="thead-light">
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
                
                obtenerRegistros($consAlumno, 2); // Estas funciones las encontraremos en consultas.php
                  
              } elseif ($_GET["opcion"] == "asignaturas") {
                  
                obtenerRegistros($consAsignaturas, 8);

              } elseif ($_GET["opcion"] == "curso") {
                
                obtenerRegistros($consCurso,8);
              };
            };

          ?>
      </tr>
    </tbody>
  </table>

