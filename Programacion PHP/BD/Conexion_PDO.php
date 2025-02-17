<?php

$server = 'localhost';
$userName = 'root';
$pass = '';
$db = 'ies_bd';

//CONEXIÓN PDO

$conexion = new PDO("mysql:host=$server; dbname=$db; charset=UTF8",$userName,$pass);

//CONFIGURACION DE PROPIEDADES
//Manejo de errores con excepciones
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Se puede configurar el modo recuperación predeterminado 
//por defecto la conexión nos devuelve valores con fetch y arrays asociativos
$conexion ->setAttribute(       PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo "Conexión realizada con éxito <br>";

echo "Versión del servidor: ". $conexion -> getAttribute(PDO::ATTR_SERVER_VERSION) ."<br>";
echo "Tipo de controlador: ". $conexion -> getAttribute(PDO::ATTR_DRIVER_NAME) ."<br>";

//OBTENER DATOS DE LA BD CON PDO
// $stmt = $conexion -> query("SELECT * FROM alumnos");
// $resultado = $stmt ->fetchAll(PDO::FETCH_ASSOC);


// foreach($resultado as $fila){
//     echo "<pre>";
//     print_r($fila);
//     echo "<br>";
// }


//OBTENER DATOS DE LA BD CON PDO

// $stmt = $conexion -> query("SELECT * FROM alumnos");
// $resultado = $stmt ->fetchAll(PDO::FETCH_NUM);


// foreach($resultado as $fila){
//     echo "<pre>";
//     print_r($fila);
//     echo "<br>";
// }


///TRANSACCIONES

try{
    $conexion->beginTransaction();
    //ejecutas consulta 1
    $stmt = $conexion ->prepare("UPDATE profesores SET telefono = ? WHERE id = ?");
    $stmt->execute(['666666666',1]);
    
    //ejecutas consulta 2
    $stmt = $conexion ->prepare("UPDATE profesores SET telefono = ? WHERE id = ?");
    $stmt->execute(['666666666',2]);

    $conexion->commit();
}catch(Exception $ex){
    $conexion->rollback();
    echo "<br> Error en la transaccion. Rollback realizado".$ex->getMessage() ."<br>";

}


//CONSULTAS PREPARADAS

//ejemplo utilizando ?
echo "Consulta preparada con ? <br>";
$stmt2 = $conexion ->prepare("INSERT INTO profesores (nombre,asignatura) VALUES (?,?)");
$nombre = "Manolo";
$asignatura = "Fñisica";

$stmt2->bindParam(1,$nombre);
$stmt2->bindParam(2,$asignatura);

$stmt2 ->execute();

echo "Profesor $nombre de la asignatura $asignatura insertado en BD correctamente";




//ejemplo utilizando etiquetas

echo "<br>Consulta preparada con etiquetas <br>";
//añadimos : delante del nombre de la etiqueta y luego en el bindParam añadimos la etiqueta junto con la variable que la vamos a añadir
$stmt3 = $conexion -> prepare("INSERT INTO profesores (nombre,asignatura) VALUES (:nombreProfesor, :asignatura)");
$nombre = "Pedro";
$asignatura = "Biologia";

$stmt3 ->bindParam(':nombreProfesor',$nombre);
$stmt3 ->bindParam(':asignatura',$asignatura);
$stmt3->execute();

echo "Profesor $nombre de la asignatura $asignatura insertado en BD correctamente";

$stmt4 = $conexion -> prepare("INSERT INTO profesores (nombre,asignatura) VALUES (:nombreProfesor, :asignatura)");

$stmt4 ->execute([
    'nombreProfesor'=>"Antonio",
    'asignatura'=>"Matemáticas"
    ])
?>