<?php
//conexion a BD mediante objetos

$server = "localhost";
$userName = "root";
$pass="";
$db = "ies_bd";


$conexion = new mysqli();
$conexion ->connect($server, $userName, $pass, $db);

$error = $conexion -> connect_errno;
if($error != null){
    echo"Error nº-> ".$error." conectando a la base de datos ".$conexion->connect_error;
    exit();
}

?>