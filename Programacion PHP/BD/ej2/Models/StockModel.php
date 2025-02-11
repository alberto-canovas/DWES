<?php

require_once __DIR__."/ConexionModel.php";
require_once __DIR__."/../Controllers/StockController.php";





class StockModel{
    private $conexion;

    public function __construct() {
        $this->conexion = ConexionModel::connect();
    }

    // public function update($cantidad,$tienda,$producto){
    //     $consulta ="UPDATE stock SET cantidad = ?, tienda = ?, producto = ?";
    //     $stmt = $this->conexion->prepare($consulta);
    //     $stmt->bind_param("iis",$cantidad,$tienda,$producto);
    //     return $stmt->execute();
    // }

    // public function insert($cantidad,$tienda,$producto){
    //     $consulta = "INSERT INTO stock (producto, tienda, unidades) VALUE (?,?,?)";
    //     $stmt = $this->conexion->prepare($consulta);
    //     $stmt->bind_param("sii", $producto,$tienda,$cantidad);
    //     return $stmt->execute();
    // }


    public function insertarUnidades($codigo_producto,$tienda_destino,$unidades){
        $consulta = "INSERT INTO stock (producto, tienda, unidades) VALUE (?,?,?)";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("sii", $codigo_producto,$tienda_destino,$unidades);
        $stmt->execute();

        return  $stmt->affected_rows;//nos devuelve las filas que se han modificado al hacer el insert

    }


    public function restarUnidades($codigo_producto, $tienda_origen, $unidades){
        $consulta ="UPDATE stock SET unidades = unidades - ? WHERE producto = ? AND tienda = ?";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("isi",$unidades,$codigo_producto,$tienda_origen);
        $stmt->execute();
        return $stmt->affected_rows;//nos devuelve las filas que se han modificado al hacer el update

    }


    public function consultarUnidades($codigo_producto){
        $consulta = "SELECT * FROM stock WHERE producto = ? ";
        $stmt = $this->conexion->prepare($consulta);
        $stmt->bind_param("s",$codigo_producto);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();

    }


}

?>