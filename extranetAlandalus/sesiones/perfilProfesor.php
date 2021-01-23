<!--Este archivo muestra menú que redirige a distintos datos de la BBDD y los muestra en forma de tabla-->

<?php
 include("../conexionesBD/config.php");
 include("../conexionesBD/conexionbd.php");
 

$cabeceras_alumnos = ["id", "usuario", "contraseña", "nombre", "apellidos", "teléfono", "email", "curso", "activo"];
$cabeceras_cursos = ["id", "nombre"];
$cabeceras_trimestres = ["id", "nombre", "evaluación", "orden"];

if(!isset($_SESSION['usuario'])){

 header('location:destruirSesion.php');
}


?>

<!--Desde este menú accederemos a las distintas tablas. El paso de párametros es necesario para continuar mostrando al usuario su nombre y perfil-->
  <ul class="nav nav-tabs">
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?datos=alumnos">Alumnos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?datos=cursos">Cursos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="controlSesiones.php?datos=trimestres">Trimestres</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="destruirSesion.php">Salir</a>
          </li>
          <li style="text-align:right; width:40%">
          <?php
              if(isset($_GET["datos"])){
                  if ($_GET["datos"] == "alumnos") {

                     echo '<a href="controlSesiones.php?alta=true"><button type="button" class="btn btn-outline-info" class="mx-right">NUEVA ALTA</button></a>';
                  };                
              };
          ?>
          </li>
      </ul>
     
    <table class="table">
      <thead>
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
               
                echo '
                <form action="../alta.php?" method="POST">
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
                    <div class="form-group col-md-4">
                      <label for="curso">Curso</label>
                      <select id="curso" name="curso" class="form-control" name="curso">
                        <option selected>Identificadores de cursos</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Dar de alta</button>
                </form>';
                
              }else{

              //Mientras no se muestren datos ni formularios añadiremos un mensaje y una imagen decorativa:
                echo "</br>";
                echo '<div class="alert alert-warning" role="alert">
                Para comenzar seleccione en el menú los datos que desea consultar o pulse la opción de salir.
              </div>';
                echo '<div class="text-center" style= "opacity: 0.4"><img src="../img/escudo.jpg" class="rounded" alt="imagen escudo IES Alandalus"></div>';
              };
            };
           
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php

          if(isset($_GET["datos"])){
              if ($_GET["datos"] == "alumnos") {

                if(isset($_GET["id_Alumno"])){
                  
                  include("../baja.php");
                }else{
                 obtenerRegistrosEnColor($consultaAlumnos, 8, 0, "#E89A8A");

               };
                  
                } elseif ($_GET["datos"] == "cursos") {
                  
                  obtenerRegistros($consultaCursos);

                } elseif ($_GET["datos"] == "trimestres") {
                  
                  obtenerRegistros($consultaTrimestres);
              }
          }

          ?>
      </tr>
    </tbody>
  </table>

