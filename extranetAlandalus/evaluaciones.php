<?php
/*Archivo que gestiona los cambios de notas de los alumnos desde perfilProfesor.php a través de la pestaña evaluaciones*/

include("conexionesBD/config.php");
include("conexionesBD/conexionbd.php");
include("consultas.php");
require_once('autoload.php');

autoload(null);



//Arrays con los nombres de las cabeceras de las columnas de las distintas tablas que se mostrarán en pantalla.

$cabeceras_notas = ["curso", "asignatura","trimestre", "nota"];
echo "<hr></hr>";
titulosColumnas($cabeceras_notas);


?>
     <form action="../alta.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="curso">Curso</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" value="" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="asignatura">Asignatura</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" value="" readonly>
                  </div>
                </div>
                  
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="trimestre">Trimestre</label>
                      <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nota">Nota</label>
                      <input type="number" class="form-control" id="telefono" name="telefono">
                    </div>
                </div>
                  <button type="submit" class="btn btn-primary">Modificar</button>
      </form>


        
           


