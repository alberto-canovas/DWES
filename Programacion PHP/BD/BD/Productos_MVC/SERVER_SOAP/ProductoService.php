<?php

require_once __DIR__ ."/ConexionPDO_NO_STATIC.php";
require_once __DIR__ ."/ConexionPDO_STATIC.php";

class ProductoService{
    //propiedades

    private $conexionStatic;
    private $conexion;

    public function __construct(){
        $this->conexion = (new ConexionPDO_NO_STATIC())->getConnection();
        //no tenemos que crear una instancia en el static porque ya se crea sola si no hay una ya existente
        $this->conexionStatic = ConexionPDO_STATIC::connect();
    }


    //métodos

    // public function obtenerProductos(){
    //     $consulta = "SELECT cod, nombre_corto FROM producto";
    //     $stmt = $this->conexion->prepare($consulta);
    //     //no hay que poner nada de bind ya que no tiene ninguna interrogación
    //     $stmt->execute();
    //     $resultado = $stmt->get_result();
    //     //si utilizamos fetch_assoc debemos de usar un while después para recorrer todos los datos
    //     //con el fetch_all nos devuelve un array asociativo de todos los productos
    //     return $resultado->fetch_all(MYSQLI_ASSOC);
    // }

    public function obtenerProductos(){
            $consulta = "SELECT cod, nombre_corto FROM producto";
            $stmt= $this->conexion->query($consulta);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
    }

    public function obtenerProductosStatic(){
        $consulta = "SELECT cod, nombre_corto FROM producto";
        $stmt= $this->conexionStatic->query($consulta);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
}
}
?>