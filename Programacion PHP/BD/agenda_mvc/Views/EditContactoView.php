
<?php

require_once __DIR__ ."/../Controllers/ContactosController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactoController = new ContactosController();

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tlf = $_POST["tlf"];
    $direccion = $_POST["direccion"];
    $id = $_POST["id"];
     
    if($contactoController->idExist($id) == true) {
        $actualizado = $contactoController->updateContacto( $nombre, $email, $tlf, $direccion,$id);

    }else{
        $actualizado = $contactoController->addContacto($nombre, $email, $tlf, $direccion);
    }

    if($actualizado) {
        header("Location: agendaView.php");
        exit();
    } else {
        echo "Error al actualizar el contacto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
</head>
<body>
    <h1>Editar Contacto</h1>
    <form action="" method="post">

    
        <label>Id:</label>
        <input type="text" name="id"  required><br>

        <label>Nombre:</label>
        <input type="text" name="nombre"  required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Teléfono:</label>
        <input type="tel" name="tlf" required><br>

        <label>Dirección:</label>
        <input type="text" name="direccion"  required><br>

        <input type="submit" value="Actualizar/Añadir">
    </form>
</body>
</html>