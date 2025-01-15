<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos desde la propia página</title>
    <link rel="stylesheet" href="estilos/estilo1.css">
</head>

<body>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">

            <label for="nombre">Nombre del alumno</label>
            <input type="text" id="nombre" name="nombre"> <br>
            <p>Módulos que cursa: </p>
            <input type="checkbox" name="modulos[]" value="DWES">Desarrollo web entorno servidor <br>
            <input type="checkbox" name="modulos[]" value="DWEC">Desarrollo web entorno cliente <br>
            <input type="checkbox" name="modulos[]" value="DIW">Desarrollo interfaces web <br>

            <input type="submit" value="ENVIAR">
        </form>

        <?php
        echo "<pre>";
        echo $_SERVER["PHP_SELF"];
        // echo "<hr>";
        // print_r($_SERVER);
        print_r($_GET);
        
        echo $_GET["nombre"];
        echo "</pre>";
        ?>
</body>

</html>