<?php






$hoy = date("d/m/y");
$tipoAlerta =['VIENTOS HURACANADOS', 'TEMPERATURAS SUPERIORES A 45º'];



if($_SESSION['notificacion'] === "1"){


    
    echo '<div class="mx-auto" style="width: 35rem;">
    <div class="card-body bg-warning">
    <h5 class="card-header text-center">¡MENSAJE DE ALERTA POR TEMPORAL!</h5>
    <p class="card text-center">Debido a condiciones atmosféricas el centro permanecerá <b>CERRADO</b> hoy día '.$hoy.'</p>
    </div>';
    echo '<div class="mx-auto" style="width: 35rem;">
        <div class="card-body">
        <h5 class="card-header text-center">PREVISIÓN DE HOY</h5>
        <p class="card text-center">TEMPERATURA MÁXIMA: '.$_SESSION['clima']['maxima'][1].' '.'grados</p>
        <p class="card text-center">VELOCIDAD DEL VIENTO: '.$_SESSION['clima']['viento'][1].' '.'km/h</p>
        </div>';
    echo '<div class="card-body">
        <h5 class="card-header text-center">PREVISIÓN PARA MAÑANA</h5>
        <p class="card text-center">TEMPERATURA MÁXIMA: '.$_SESSION['clima']['maxima'][2].' '.'grados</p>
        <p class="card text-center">VELOCIDAD DEL VIENTO: '.$_SESSION['clima']['viento'][2].' '.'km/h</p>
        </div>
        </div>';


} else if($_SESSION["notificacion"] === "2") {

    echo '<div class="mx-auto" style="width: 35rem;">
    <div class="card-body">
    <h5 class="card-header text-center">NO EXISTEN AVISOS</h5>
    <p class="card text-center">"El centro permanecerá <b>ABIERTO</b> hoy día "'.$hoy.'"</p>
    <p class="card text-center">"Vientos huracanados superiores a 103 km/h y temperaturas superiores a 45º serán motivo de cierre temporal de las instalaciones"</p>
    </div>
    </div>';
};

?>