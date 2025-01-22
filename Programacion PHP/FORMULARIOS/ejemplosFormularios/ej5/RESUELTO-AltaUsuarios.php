<?php

require ("Funciones.php");

$errores = [];
$nombre = "";
$apellidos = "";
$password = "";
$apellidos = "";
$telefono = "";
$email = "";
$ordenador = "";
$provincia = "";
$comentario = "";
$aficiones = [];

if($_POST){
    //CONTROL DE ERRORES (Validaciones)
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";

    //validación nombre
    if(!isset($_POST['nombre'])||empty($_POST['nombre'])){
        $errores['nombre'] ="El campo nombre está vacío";
    }else{
        //método trim quita los espacios de delante y de detrás del nombre
        $nombre = trim($_POST['nombre']);
    }

    //validación apellidos
    if(!isset($_POST['apellidos'])||empty($_POST['apellidos'])){
        $errores['apellidos'] ="El campo apellidos está vacío";
    }else{
        //método trim quita los espacios de delante y de detrás del apellidos
        $apellidos = trim($_POST['apellidos']);
    }

    //validar teléfono
    if(!isset($_POST['telefono']) || empty($_POST['telefono'])){
        $errores['telefono'] ="El teléfono es obligatorio";
    }elseif(strlen(string: $_POST['telefono'])!=9){
        $errores['telefono'] ="El telefono debe tener 9 dígitos";
    }
    else{
        $telefono = trim($_POST['telefono']);
    }


    //validar email
    if(!isset($_POST['email'])||empty($_POST['email'])){
        $errores['email']="El email no puede estar vacío";
    }else{
        $email = trim($_POST['email']);
    }

    //validar ordenador
    if(!isset($_POST['ordenador'])||empty($_POST['ordenador'])){
        $errores['ordenador']="El campo ordenador no puede estar vacío";
    }else{
        $ordenador = trim($_POST['ordenador']);
    }

    //validar aficiones
    if(isset($_POST['aficiones'])&& !empty($_POST['aficiones'])){
        $aficiones = ($_POST['aficiones']);

    }else{
        $errores['aficiones']="Seleccione una afición";
    }


    $comentario = trim($_POST['comentario']);
    $provincia = $_POST['provincia'];

    if(empty($errores)){
        echo "<h1>Datos recogidos del formulario</h1>";
        echo "<p> Nombre: $nombre </p>";
        echo "<p> Apellidos: $apellidos </p>";
        echo "<p> telefono: $telefono </p>";
        echo "<p> email: $email </p>";
        echo "<p> comentario: $comentario </p>";
        echo "<p> Provincia: $provincia </p>";
        echo "<p> Aficiones:";
        foreach($aficiones as $key => $aficion){    
            echo $aficion;
            if($key < count($aficiones)-1){
                echo ",";
            }else{
                echo".";
            }
        }

        echo"</p>";
        echo "<p>Provincias:".$provincia."</p>";
        echo" <a href=".$_SERVER['PHP_SELF']."> VOLVER AL FORMULARIO </a>";


    }else{
        echo "<pre>";
        print_r($errores);
        echo "</pre>";
        include "RESUELTO-formulario.php";
        }
    
}else{
    include "RESUELTO-formulario.php";
}


?>