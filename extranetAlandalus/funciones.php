<?php

/*Aqui todas las funciones necesarias para
* realizar REDICCIONAMIENTOS y MOSTRAR MENSAJES de validación y error por pantalla.
*/

//REDIRECCIONAMIENTO

function redireccionar($url) {
	// Función para redireccionar al usuario a una url pasada por parámetro.
    echo "<script type='text/javascript'>location.href='".$url."';</script>";
    exit;
}

//CONTROL DE MENSAJES

function mostrarMensajeOK($msg, $usuario, $perfil) {
	// Función para mostrar los mensajes de Información al usuario
    if($msg>0&&$msg<10) {
        $mensaje[1]="$usuario, acaba de acceder a <span style='color: blue;'>IES AL-ANDALUS</span> con el perfíl de <span style='color: blue;'>$perfil </span>*";
        $mensaje[2]="La información se ha guardado correctamente.";
        $mensaje[3]="El comentario se ha guardado correctamente.";
        $mensaje[4]="El comentario sobre el alumno se ha guardado correctamente.";
        $mensaje[5]="SinInfo";
        $mensaje[6]="SinInfo";
        $mensaje[7]="SinInfo";
        $mensaje[8]="SinInfo";
        $mensaje[9]="SinInfo";
        $mensaje[10]="SinInfo";
        echo '<div class="alert alert-success">'.$mensaje[$msg].'</div>';
    }
}

function mostrarMensajeERR($msg) {
	// Función para mostrar los mensajes de Error al usuario
    if($msg>0&&$msg<10) {
        $mensaje[1]="Debe completar los campos del formulario.";
        $mensaje[2]="Datos incorrectos. Pruebe de nuevo.";
        $mensaje[3]="El usuario no está activo. Debe de contactar con su Director para que active su cuenta.";
        $mensaje[4]="Su sesión ha expirado. Debe volver a iniciar la sesión.";
        $mensaje[5]="Debe completar el campo <u>Nombre</u>";
        $mensaje[6]="Debe completar el campo <u>Apellidos</u>";
        $mensaje[7]="Debe completar el campo <u>Email</u>";
        $mensaje[8]="Ese email ya está ocupado. Pruebe con otro o contacte con los administradores del sistema.";
        $mensaje[9]="Email no válido.";
        $mensaje[10]="SinInfo";
        echo '<div class="alert alert-danger">'.$mensaje[$msg].'</div>';
    }
};



?>