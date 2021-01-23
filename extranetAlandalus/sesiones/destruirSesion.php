<?php
include("../funciones.php");

session_start();

if(isset($_SESSION)){

    $_SESSION = [];

    session_destroy();

    redireccionar("../index.php");


}else{ redireccionar("../index.php"); };


?>