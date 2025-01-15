<?php

include_once('Clases/Persona.php');

echo "<pre>";

$persona = new Persona("Angel",40);

echo "<br> Mostrar informacion <br>";

$persona ->mostrarInformacion();

$persona->telefono = "65431987";
$persona->direccion = "Calle de la esperanza 3";

echo "</pre>";

$persona->mostrarInformacion();

?>