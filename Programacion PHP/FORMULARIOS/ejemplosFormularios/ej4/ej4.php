<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <H1>CONTROL DE ERRORES</H1>
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
                $errores["salario"] = "El campo salario está vacío";
            }elseif($salario<0){
                $errores["salario"] = "Introduce un salario mayor que 0";
            }elseif(!is_numeric($salario)){
                $errores["salario"] = "Introduce un número";
            };

            
            if(!isset($edad)||$edad === ""){
                $errorse["edad"]="El campo edad está vacío";
            }elseif(!is_numeric($edad)){
                $errores["edad"]="Introduce una edad numérica";
            }elseif($edad<=15){
                $errores["edad"]="Introduce una edad LEGAL";
            };


            
            if(!isset($nombre)||$nombre ===""){
                $errores["nombre"]="El campo nombre está vacío";
            };
            
            
            if(!isset($apellidos)||$apellidos ===""){
                $errores["apellidos"]="El campo apellidos está vacío";
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

            if (isset($errores)) {
                //echo "<br><a href=".$_SERVER["PHP_SELF"].">VOLVER</a>";
                echo"hay errores";
                include "Plantilla.php";
                mostarErrores($errores);
            } else {
                echo "Todos los datos son correctos.";
                echo "<br> $nombre_y_apellidos, tu salario será de $salario";
            }
        }


        function mostarErrores($errores){
            
        }



        ?>
    </main>

    <footer>

    </footer>
</body>

</html>