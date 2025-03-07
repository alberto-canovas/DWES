<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilo1.css">
    <title>CONTROL DE ERRORES</title>
</head>

<body>

    <header>
        <h1>CONTROL DE ERRORES</h1>
    </header>

    <main>

        <?php

        include "Funciones.php";

        if (!$_POST) {
            $errores[] = "";
            include "Plantilla.php";

        } else {
            // print_r($_POST);
            //$errores[]="";

            //procesamos la información del formulario
            if (!isset($_POST["nombre"]) || $_POST["nombre"] === "") {
                $errores["nombre"] = "No he recibido el parámetro nombre";
            } elseif (strlen($_POST["nombre"]) < 3) {
                $errores["nombre"] = "El campo nombre es muy corto";
            }

            if (!isset($_POST["email"]) || $_POST["email"] === "") {
                $errores["email"] = "No he recibido el parámetro email";
            } elseif (strlen($_POST["email"]) < 6) {
                $errores["email"] = "El campo  email es demasiado corto";
            }


            if (!isset($_POST["clave"]) || !isset($_POST["clave2"]) || $_POST["clave"] === "" || $_POST["clave2"] === "") {
                $errores["clave2"] = "No hemos recibido ambas claves";
            } elseif ($_POST["clave"] != $_POST["clave2"]) {
                $errores["clave2"] = "Las claves deben ser iguales";
            }

            if (isset($errores)) {
                //echo "<br><a href=".$_SERVER["PHP_SELF"].">VOLVER</a>";
                include "Plantilla.php";
            } else {
                echo "Todos los datos son correctos.";
            }
        }

        ?>

    </main>


    <footer>

    </footer>
</body>

</html>