<?php

require_once __DIR__."/../Controllers/StockController.php";


$stockController = new StockController();
//código producto, tienda origen. tienda destino y unidades a traspasar
$resultado = $stockController ->transferirUnidades("3DSNG", 1,3,1);

$consultaUnidades = $stockController ->consultarUnidades("3dsng");

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
    //echo $resultado;
    echo $consultaUnidades;

    ?>
    
</body>
</html>