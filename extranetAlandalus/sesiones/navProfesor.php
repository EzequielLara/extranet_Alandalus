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
    <a class="nav-link" href="destruirSesion.php" tabindex="-1" aria-disabled="true">Salir</a>
</li>
            