
  <!--Desde este menú accederemos a las distintas tablas gracias al paso de párametros necesarios para realizar las consultas dinámicas ya que a cada usuario con perfil de alumno se le mostrará un contenido diferente.Los parámetros nombre y perfil tambien son necesarios pasarlos si queremos continuar mostrando, en la parte superior de la página, dichos datos.-->

<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='alumnos'){echo 'active';}?>" aria-current="page" href="controlSesiones.php?opcion=alumnos">Alumno</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='cursos'){echo 'active';}?>" href="controlSesiones.php?opcion=asignaturas">Asignaturas</a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($_GET['datos']=='trimestres'){echo 'active';}?>" href="controlSesiones.php?opcion=curso">Curso</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="destruirSesion.php" tabindex="-1" aria-disabled="true">Salir</a>
</li>