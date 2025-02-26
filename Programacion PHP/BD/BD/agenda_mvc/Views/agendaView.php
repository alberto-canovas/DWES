<?php

require_once __DIR__."/../Models/ConexionPDOModel.php";
require_once __DIR__."/../Controllers/ContactosController.php";
require_once __DIR__."/../Controllers/ContactosControllerPDO.php";

$contactos = new ContactosController;


//print_r($contactos->obtenerContactos());
$contactos = $contactos->obtenerContactos();
//print_r($contactos->addContacto("pepe","pepe@gmail.com","132456789","calle pepe"));


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    /* Estilos generales del formulario */
form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilos de los labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

/* Estilos de los inputs y textarea */
input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease-in-out;
}

input:focus, textarea:focus, select:focus {
    border-color: #007bff;
    outline: none;
}

/* Estilos para el botón */
button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button:hover {
    background-color: #0056b3;
}

/* Estilos generales de la tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    text-align: left;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilos de las celdas de encabezado */
th {
    background: #007bff;
    color: white;
    padding: 12px;
}

/* Estilos de las celdas de datos */
td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

/* Alternar colores en las filas */
tr:nth-child(even) {
    background: #f2f2f2;
}

/* Efecto hover en filas */
tr:hover {
    background: #ddd;
}

/* Ajuste de texto en celdas */
td, th {
    white-space: nowrap;
}


</style>
<body>
    <table>
        <thead>
            <tr>
                <td>BORRAR</td>
                <td>EDITAR</td>
                <td>Id</td>
                <td>Nombre</td>
                <td>Email</td>
                <td>Teléfono</td>
                <td>Direccion</td>
            </tr>
        </thead>
        <tbody>
            
             
        <?php foreach($contactos as $contacto){ ?>
            <form method="post">
                
                <tr>
                    <td><input type="submit" name="borrar" value="BORRAR"/></td>
                    <td><input type="submit" name="editar" value="EDITAR"/></td>
                    <td><?= $contacto['id_contacto']?></td>
                    <td><?= $contacto['nombre']?></td>
                    <td><?= $contacto['email']?></td>
                    <td><?= $contacto['tlf']?></td>
                    <td><?= $contacto['direccion']?></td>
                    <input type="text" value="<?= $contacto['id_contacto']?>" >
                </tr>
                
                
            </form>
                <?php } ?>
            
        </tbody>
    </table>

    <?php

        if(isset($_POST['borrar'])){
            echo'has pulsado borrar';
        }elseif(isset($_POST['editar'])){
            
        }

    ?>
    
    <a href="./AddContactoView.php">AÑADIR CONTACTO</a>
    <a href="">EDITAR CONTACTO</a>
    <a href="./DeleteContactoView.php">ELIMINAR CONTACTO</a>
    
</body>
</html>