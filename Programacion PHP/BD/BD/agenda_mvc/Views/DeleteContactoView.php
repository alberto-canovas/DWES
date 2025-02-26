<?php

require_once __DIR__ . "/../Models/ConexionPDOModel.php";
require_once __DIR__ . "/../Controllers/ContactosController.php";
require_once __DIR__ . "/../Controllers/ContactosControllerPDO.php";

$contactos = new ContactosController;


$contactos = $contactos->obtenerContactos();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>ELIMINAR CONTACTO</h1>
    <p><a href="/DWES%20ALBERTO/Programacion%20PHP/BD/agenda_mvc/Views/agendaView.php">VOLVER</a></p>

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


            <?php foreach ($contactos as $contacto) { ?>

                <tr>
                    <td><?= $contacto['id_contacto'] ?></td>
                    <td><?= $contacto['nombre'] ?></td>
                    <td><?= $contacto['email'] ?></td>
                    <td><?= $contacto['tlf'] ?></td>
                    <td><?= $contacto['direccion'] ?></td>
                </tr>


            <?php } ?>

        </tbody>
    </table>

  

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

        <label for="id_contacto">id</label>
        <input type="text" name="id_contacto" id="id_contacto">

        <input type="submit" value="Eliminar contacto">
    </form>


    <?php
    if (!$_POST) {
        $errores[] = "";
    } else {

        //CONTROL DE ERRORES id
        if (!isset($_POST['id_contacto']) || $_POST['id_contacto'] == '') {
            $errores['id_contacto'] = 'El campo id_contacto está vacío';
            // }elseif(!is_numeric( $_POST['nombre'])){
            //     $errores['id_contacto'] = 'El campo id_contacto debe contener números';
        } else {
            $id = $_POST['id_contacto'];
        }

        if (isset($errores)) {
            foreach ($errores as $error) {
                print_r($error);
            }
        } else {
            $contacto = new ContactosController();
            $contacto->deleteContacto($id);
            echo " <br> Contacto eliminado con éxito";
        }
        header("Location: agendaView.php");
        exit(); // Importante para evitar que el script siga ejecutándose
    }
    
    ?>




</body>

</html>