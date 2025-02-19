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
                <td>Id</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Teléfono</td>
                <td>Direccion</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($contactos as $contacto){
                    
                    print_r($contacto);
                }
            ?>
            <tr></tr>
        </tbody>
    </table>


    
    <a href="/DWES%20ALBERTO/Programacion%20PHP/BD/agenda_mvc/Views/AddContactoView.php">AÑADIR CONTACTO</a>
    <a href="">EDITAR CONTACTO</a>
    <a href="">ELIMINAR CONTACTO</a>
    
</body>
</html>