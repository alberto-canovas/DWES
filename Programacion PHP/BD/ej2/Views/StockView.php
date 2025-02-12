<?php

require_once __DIR__."/../Controllers/StockController.php";
require_once __DIR__."/../Controllers/ProductoController.php";


$stockController = new StockController();
//código producto, tienda origen. tienda destino y unidades a traspasar
$resultado = $stockController ->transferirUnidades("3DSNG", 1,3,1);


$productoController = new ProductoController();
$productos = $productoController ->obtenerProductos("3dsng");


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['cod_producto'] )) {
    $codigoProducto = $_POST['cod_producto'];
    $stock = $stockController->obtenerStockPorCodigoProducto($codigoProducto);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de transferencia de unidades</title>
</head>
<body>
    <?php
    //ej 2
    //echo $resultado;

    //ej 3
    ?>

    <h2>CONSULTAR STOCK DE UN PRODUCTO</h2>
    <form method="POST">
        <label for="cod_producto">Seleccionar código producto</label>
        <select name="cod_producto" id="cod_producto">
            <?php
                foreach($productos as $producto) {?>
                    <!-- en $producto['cod']  'cod' se tiene que llamar igual que el campo de la base de datos  -->
                    <option value ="<?php echo $producto['cod'];?>">
                        <?php echo $producto['nombre_corto']?>
                    </option>
                <?php
                }
                ?>
        </select>
        <button type="submit" action="<?php print_r($stock)?>">Consultar Stock</button>
    </form>
    
</body>
</html>