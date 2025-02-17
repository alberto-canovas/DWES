<?php

require_once __DIR__."/../Models/ConexionPDOModel.php";
require_once __DIR__."/../Controllers/ContactosController.php";
require_once __DIR__."/../Controllers/ContactosControllerPDO.php";

$contactos = new ContactosController;


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


    <form method="post">
        
        
        
    </form>
    <a href="C:\xampp\htdocs\DWES\BD\agenda_mvc\Views\AddContactoView.php">AÑADIR CONTACTO</a>
    <button>ELIMINAR CONTACTO</button>
    <button>EDITAR CONTACTO</button>
    
</body>
</html>