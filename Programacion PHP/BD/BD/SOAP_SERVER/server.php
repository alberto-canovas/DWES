<?php
require_once __DIR__."/AlumnosService.php";
//SOAP (Simple Object Acces Protocol) Protocolo de comunicación entre sistemas
//La comunicación es a través de ficheros XML y puede funcionar en HTTP, SMTP


//Exponemos funciones para que puedan ser consumidas
//o invocadas por terceros mediante mensajes XML con una cierta estructura

//XML: Para el intercambio de datos
//SOAP Envelope: Estructura estándar de los mensajes XML
//WSDL: son opcionales y son contratos que describen las operaciones, rutas,parametros etc.

$uri = "http://localhost/api_soap/";
//tenemos que crear en la carpeta htdocs el directorio api_soap

//$server = new SoapServer(null, array('uri'=>$uri));

$options = [
    'uri'=>"http://localhost/api_soap/",
    'exceptions'=> true, //captura de excepciones
    'trace'=> true //guarda detalles de las solicitudes y respuestas
];

$server = new SoapServer(null,$options);
$server ->setClass('AlumnosService');
//Inicia el proceso de escucha del servidor
//Para que se puedan atender las peticiones
//Llama al método o función correspondiente devuelve respuesta en formato XML siguiento el ptrocolo
$server->handle();

?>