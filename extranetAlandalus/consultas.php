<!--Aqui todas las funciones y variables necesarias para la realización de las consultas y mostrarlas en pantalla-->

<?php

include('conexionesBD/conexionbd.php');

//CONSULTAS (estáticas) DEL PERFIL DE PROFESOR (todos los profesores verán lo mismo)

$consultaAlumnos = $bd->query( "SELECT * FROM ies_alumno");
$consultaProfesores = $bd->query( "SELECT * FROM ies_profesor LIMIT 40");
$consultaTrimestres = $bd->query("SELECT * FROM ies_trimestres LIMIT 40");
$consultaCursos = $bd->query( "SELECT * FROM ies_curso LIMIT 40");
$consultaAsignaturas = $bd->query( "SELECT * FROM ies_asignatura LIMIT 40");

session_start();


//MOSTRAR LOS DATOS POR FILAS

function obtenerRegistros($consulta){

    while(($fila=mysqli_fetch_row($consulta))){
        echo "<tr>";

        for($i=0; $i<count($fila);$i++){
            echo "<td>$fila[$i]</td>";
            
        };
    };
    echo "</tr>";
    
};

//MOSTRAR LOS DATOS POR FILAS PERO DANDO COLOR A CUYAS FILAS COINCIDAN CON EL VALOR DE LA  COLUMNA ELEGIDO AÑADIENDO UN BOTÓN AL RESTO DE REGISTROS.

function obtenerRegistrosEnColor($consulta, $numeroColumna, $valor, $colorFila){

  while(($fila=mysqli_fetch_row($consulta))){

    echo "<tr>";
    $i=0;
    while($i<count($fila)){

      if($fila[$numeroColumna]==$valor){

          echo"<td style=background-color:$colorFila>$fila[$i]</td>";

      }else{
        
          echo"<td>$fila[$i]</td>";     
      };

      $i++;
      //Añadimos un botón de baja para aquellos datos que no se encuentren marcados de color
      if($i == count($fila)&&($fila[$numeroColumna]!=$valor)){

        //Al pulsar botón redirecionamos la variable que identifica al alumno para poder realizar los cambios oportunos en la BBDD
         echo '<td><a href="controlSesiones.php?datos=alumnos&id_Alumno='.$fila[0].'&apellidos='.$fila[4].'&nombre_Alumno='.$fila[3].'"><button type="button" class="btn btn-warning">Baja</button></a></td>';

      };

    };
  };
};

//MOSTRAR CABECERAS DE COLUMNAS

//Pintaremos en pantalla los títulos de cada columna. El parámetro es un array con todos nombres de las cabeceras que iremos recorriendo con un for para posicionarlos en sus respectivas etiquetas </th>

function titulosColumnas($cabeceras){

    for($i=0; $i<count($cabeceras);$i++){

      echo "<th>$cabeceras[$i]</th>";
    };
  };

  include("conexionesBD/desconectadb.php");

?>