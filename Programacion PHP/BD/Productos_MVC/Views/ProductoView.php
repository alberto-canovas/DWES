<!-- Views será la parte que ve el usuario final -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <?php
    include "../Controllers/ProductoController.php";

    $ProductoController = new ProductoController();
    $mensaje="";

    if($_POST){
        //recoger los datos de los campos del formulario
        
        //enviar los datos al controller
        $mensaje = $ProductoController->gestionarProducto($codigo,$nombre,$precio,$cantidad);

    }
    ?>

    <form action="post">

    <label for="codigo">
        <p>Codigo:</p>
        <input type="text" name="codigo" id="codigo">
    </label>

    <label for="nombre">
        <p>Nombre: </p>
        <input type="text" name="nombre" id="nombre">
    </label>

    <label for="precio">
        <p>Precio</p>
        <input type="" name="precio" id="precio">
    </label>

    <label for="cantidad">
        <p>Cantidad</p>
        <input type="number" name="cantidad" id="cantidad">
    </label>



    </form>
    
</body>
</html>