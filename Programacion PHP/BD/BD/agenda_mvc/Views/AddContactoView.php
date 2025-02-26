<?php

require_once __DIR__."/../Models/ConexionPDOModel.php";
require_once __DIR__."/../Controllers/ContactosController.php";

//$addContacto = new ContactosController()->addContacto();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Contacto</title>
</head>
<style>

</style>
<body>

    <h1>AÑADIR CONTACTO</h1>
    <p><a href="./agendaView.php">VOLVER</a></p>


    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre">
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        
        <label for="tlf">Teléfono</label>
        <input type="tel" name="tlf" id="tlf">
        
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion">
        
        <input type="submit" value="Crear contacto">
    </form>


    
    <?php
        if(!$_POST){
            $errores[] = "";

        }else{


            //CONTROL DE ERRORES nombre
            if(!isset($_POST['nombre'])|| $_POST['nombre']==''){
                $errores['nombre'] = 'El campo nombre está vacío';
            }elseif(is_numeric( $_POST['nombre'])){
                $errores['nombre'] = 'El campo nombre no puede contener números';
            }else{
                $nombre = $_POST['nombre'];
            }


            //CONTROL DE ERRORES EMAIL
            if(!isset($_POST['email'])|| $_POST['email']==''){
                $errores['email'] = 'El campo email está vacío';
            }else{
                $email = $_POST['email'];
            }


            //CONTROL DE ERRORES TELÉFONO
            if(!isset($_POST['tlf'])|| $_POST['tlf']==''){
                $errores['tlf'] = 'El campo teléfono está vacío';
            }elseif(!is_numeric( $_POST['tlf'])){
                $errores['tlf'] = 'El campo teléfono no puede contener caracteres';
            //}elseif(len($_POST['tlf'])=!9){

            }else{
                $tlf = $_POST['tlf'];
            }


            //CONTROL DE ERRORES DIRECCION
            if(!isset($_POST['direccion'])|| $_POST['direccion']==''){
                $errores['direccion'] = 'El campo direccion está vacío';
            }else{
                $direccion = $_POST['direccion'];
            }

            if(isset($errores)){
                foreach($errores as $error){
                    print_r($error);
                }
            }else{
                $addContacto = new ContactosController();
                $addContacto->addContacto($nombre, $email, $tlf,$direccion);
                echo " <br> Formulario enviado con éxito";
            }

        }
    ?>
    
</body>
</html>