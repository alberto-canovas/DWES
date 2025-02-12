<?php

require_once __DIR__ ."/ConexionModel.php";
class ProductoModel{
    private $conexion;

    public function __construct(){

        $this->conexion = ConexionModel::connect();
    }

  

    //APRENDER SIEMPRE QUE HAY UN SELECT ES ESTA ESTRUCTURA 
    public function obtenerProductos(){
        $consulta = "SELECT cod, nombre_corto FROM producto";
        $stmt = $this->conexion->prepare($consulta);
        //no hay que poner nada de bind ya que no tiene ninguna interrogación
        $stmt->execute();
        $resultado = $stmt->get_result();
        //si utilizamos fetch_assoc debemos de usar un while después para recorrer todos los datos
        //con el fetch_all nos devuelve un array asociativo de todos los productos
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}


?>