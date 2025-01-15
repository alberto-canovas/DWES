<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <header>EJERCICIO 4</header>
    <main>


        
        <?php
        if (!$_POST) {
            include "Funciones.php";
            include "Plantilla.php";
        } else {
            // echo "DATOS ANTIGUOS";
            // print_r($_POST);
            $errores[] = "";
            $salario = $_POST["salario"];
            $edad = $_POST["edad"];
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $nombre_y_apellidos = $_POST["nombre"] . " " . $_POST["apellidos"];

            if(!isset($salario)|| $salario === ""){
                $errores["salario"] = "Introduce un salario";
            }elseif($salario<0){
                $errores["salario"] = "Introduce un salario mayor que 0";
            }elseif(!is_numeric($salario)){
                $errores["salario"] = "Introduce un número";
            };

            
            if(!isset($edad)||$edad === ""){
                $errorse["edad"]="Introduce una edad";
            }elseif(!is_numeric($edad)){
                $errores["edad"]="Introduce una edad numérica";
            }elseif($edad<=15){
                $errores["edad"]="Introduce una edad LEGAL";
            };


            
            if(!isset($nombre)||$nombre ===""){
                $errores["nombre"]="El campo nombre está vacío";
            };
            
            
            if(!isset($apellidos)||$apellidos ===""){
                $errores["apellidos"]="El campo nombre está vacío";
            };
            
          
            if ($salario < 1000) {
                if ($edad <= 30) {
                    $salario = 1100;
                } elseif ($edad <= 45 && $edad > 30) {
                    $salario = ($salario * 0.3) + $salario;
                } elseif ($edad > 45) {
                    $salario = ($salario * 0.15) + $salario;
                }
            } elseif ($salario > 1000 && $salario < 2000) {
                if ($edad > 45) {
                    $salario = ($salario * 0.03) + $salario;
                } elseif ($edad < 45) {
                    $salario = ($salario * 0.1) + $salario;
                }
            }

            echo "<br> $nombre_y_apellidos, tu salario será de $salario";
        }






        ?>
    </main>

    <footer>

    </footer>
</body>

</html>