<?php

require_once __DIR__."/../Models/ConexionPDOModel.php";
require_once __DIR__."/../Controllers/ContactosController.php";
require_once __DIR__."/../Controllers/ContactosControllerPDO.php";

$contactos = new ContactosControllerPDO;


print_r($contactos->obtenerContactos());


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
            <tr></tr>
        </tbody>
    </table>


    
    <a href="\xampp\htdocs\DWES\BD\agenda_mvc\Views\AddContactoView.php">AÑADIR CONTACTO</a>
    <a href="">EDITAR CONTACTO</a>
    <a href="">ELIMINAR CONTACTO</a>
    
</body>
</html>