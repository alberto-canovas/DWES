    <?php
        require_once __DIR__. "/../Controllers/ProductoController.php";

        $ProductoController = new ProductoController();
        $mensaje="";

        if($_POST){
            //recoger los datos de los campos del formulario
            $codigo=$_POST["codigo"];
            echo"".$codigo."";
            $nombre=$_POST["nombre"];
            echo"".$nombre."";
            $precio=$_POST["precio"];
            echo "".$precio."";
            $cantidad=$_POST["cantidad"];
            echo "".$cantidad."";

            //enviar los datos al controller
            $mensaje = $ProductoController->gestionarProducto($codigo,$nombre,$precio,$cantidad);
            echo "".$mensaje."";
            }
           
        $productoController = new ProductoController();
        $productoController->obtenerProductosSOAP();

    ?>

<!-- Views será la parte que ve el usuario final -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="codigo">
        <p>Codigo:</p>
        <input type="number" name="codigo" id="codigo">
    </label>

    <label for="nombre">
        <p>Nombre: </p>
        <input type="text" name="nombre" id="nombre">
    </label>

    <label for="precio">
        <p>Precio</p>
        <input type="number" name="precio" id="precio" step="0.01">
    </label>

    <label for="cantidad">
        <p>Cantidad</p>
        <input type="number" name="cantidad" id="cantidad">
    </label>

    <input type="submit" value="Enviar consulta">



    </form>
    
</body>
</html>