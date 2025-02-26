<?php

    $options = [
        'location' => 'http://localhost/api_soap/serverAgenda.php',
        'uri'=>"http://localhost/api_soap/"
    ];


    $cliente = new SoapClient(null, $options);

    echo "<h2> PRUEBA SOAP AGENDA </h2>";

    echo "resultado: ".$cliente->obtenerContactos();

    echo "resultado: ";

?>