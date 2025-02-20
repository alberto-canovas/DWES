<?php

require_once __DIR__."/../Models/ConexionPDOModel.php";
require_once __DIR__."/../Controllers/ContactosController.php";
require_once __DIR__."/../Controllers/ContactosControllerPDO.php";

$contactos = new ContactosController;


//print_r($contactos->obtenerContactos());
$contactos = $contactos->obtenerContactos();
//print_r($contactos->addContacto("pepe","pepe@gmail.com","132456789","calle pepe"));


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
            </tr>
            <?php
                foreach($contactos as $contacto){
                    foreach($contacto as $row){
                        print_r($row);
                        echo "<br>";
                    }
                    // echo "<pre>";
                    // print_r($contacto);
                    // echo "<br>";
                }
            ?>
            <tr></tr>
        </tbody>
    </table>


    
    <a href="/../Views/AddContactoView.php">AÑADIR CONTACTO</a>
    <a href="">EDITAR CONTACTO</a>
    <a href="">ELIMINAR CONTACTO</a>
    
</body>
</html>