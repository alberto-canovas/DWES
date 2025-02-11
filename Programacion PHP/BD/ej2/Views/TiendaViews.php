<?php

    require_once __DIR__. "/../Controllers/StockController.php";

    $StockController = new StockController();

    if($_POST){
        $cantidad = $_POST["cantidad"];
        $producto = $_POST["producto"];
        $tienda = $_POST["tienda"];
        $tiendaRetirar = $_POST["tiendaRetirar"];

        //$StockController->gestionarStockTienda($cantidad, $producto, $tienda);


        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad">
    <br>
    <label for="producto">Producto</label>
    <input type="text" name="producto" id="producto">
    <br>
    <label for="tienda">Tienda</label>
    <input type="number" name="tienda" id="tienda">
    <br>
    <label for="tiendaRetirar">Tienda a retirar</label>
    <input type="number" name="tiendaRetirar" id="tiendaRetirar">
    <br>


    <input type="submit">
    </form>
    
</body>
</html>