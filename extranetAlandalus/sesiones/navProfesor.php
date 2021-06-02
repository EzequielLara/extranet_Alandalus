
<li class="nav-item">
<?php
      if($_SESSION["notificacion"]=="1"){
          
        echo '<a class="nav-link mr-5" href="controlSesiones.php?notificacion=1">Avisos: <img src="../img/correo2.png" width="30px"></a>';
    }else{
        
        echo '<a class="nav-link mr-5" href="controlSesiones.php?notificacion=2">Avisos: <img src="../img/correo.png" width="30px"></a>';
      }
    ?>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='alumnos'){echo 'active';}?>" aria-current="page" href="controlSesiones.php?datos=alumnos&pagina=1">Alumnos</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='cursos'){echo 'active';}?>" href="controlSesiones.php?datos=cursos">Cursos</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='trimestres'){echo 'active';}?>" href="controlSesiones.php?datos=trimestres">Trimestres</a>
</li>
<li class="nav-item">
<?php
      if($_SESSION['usuario']['curso'] != 0){

      
        echo '<a class="nav-link mr-5" href="controlSesiones.php?datos=evaluacion&pagina=1">Evaluaciones</a>';

      };
?>
</li>
<li class="nav-item">
    <a class="nav-link" href="destruirSesion.php" tabindex="-1" aria-disabled="true">Salir</a>
</li>



            