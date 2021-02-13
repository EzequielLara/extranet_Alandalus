<nav aria-label="Page navigation example">

    <ul class="pagination justify-content-end ">
    <li class="page-item <?php echo $_GET['pagina']<=1 ?'disabled':''?>"><a class="page-link" href="../sesiones/controlSesiones.php?datos=alumnos&pagina=<?php echo $_GET['pagina']-1?>">Anterior</a></li>
                    
    <?php for($i=1; $numeroBotonesPaginacion+1>$i; $i++):?>

                    
    <li class="page-item  <?php echo $_GET['pagina']==$i?'active':''?>"><a class='page-link' href='../sesiones/controlSesiones.php?datos=alumnos&pagina=<?php echo $i?>'><?php echo $i?></a></li>

    <?php endfor ?>

    <li class="page-item <?php echo $_GET['pagina']>=$numeroBotonesPaginacion ?'disabled':''?>"><a class="page-link" href="../sesiones/controlSesiones.php?datos=alumnos&pagina=<?php echo $_GET['pagina']+1?>">Siguiente</a></li>
    </ul>
</nav>