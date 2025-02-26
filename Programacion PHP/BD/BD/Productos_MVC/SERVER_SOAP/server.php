<?php


require_once __DIR__ ."/ProductoService.php";

$options=[
    //en htdocs tiene que haber una carpeta soap_server que nos va a hacer de servidor, ahí es donde tenemos que meter los archivos que va a utilizar postman
    'uri'=> 'http://localhost/soap_server',
    'exceptions'=> true,
    'trace' => 1
];

try{
    $server = new SoapServer(null,$options);
    //le ponemos el mismo nombre que el archivo nuestro servicio
    $server->setClass('ProductoService');
    //el handle es la escucha
    $server->handle();
}catch(Exception $e){
    echo'Error en el servidor soap '. $e->getMessage();
}



?>