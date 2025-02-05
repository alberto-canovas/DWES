<?php

require_once __DIR__.'/ConexionModel.php';

class ProductoModel{
    private $conexionBD;

    public function __construct(){
        $this->conexionBD = (new ConexionModel())->getConnection();
    }


    public function insertar($codigo,$nombre,$precio,$cantidad){
        $consulta = "INSERT INTO productos (codigo, nombre, precio, cantidad) VALUE(?,?,?,?)";
        $stmt = $this->conexionBD->prepare($consulta);
        //el 'isdi' son las iniciales (integer, string, double, integer) de los tipos de codigo, nombre, precio y cantidad
        $stmt->bind_param("isdi",$codigo,$nombre,$precio,$cantidad);
        return $stmt->execute();
    }

    public function actualizar($codigo,$nombre,$precio,$cantidad){
        $consulta ="UPDATE productos SET codigo = ?, nombre=?, precio=?, cantidad=? ";
        $stmt = $this->conexionBD->prepare($consulta);
        $stmt->bind_param("isdi",$codigo,$nombre,$precio,$cantidad);
        return $stmt->execute();
    }

    public function eliminar($codigo){
        $consulta ="DELETE FROM productos WHERE codigo = ?";
        $stmt = $this->conexionBD->prepare($consulta);
        $stmt->bind_param("i",$codigo);
        return $stmt->execute();

    }

    public function getProducto($codigo){
        $consulta = "SELECT * FROM productos WHERE codigo = ?";
        $stmt = $this->conexionBD->prepare($consulta);
        $stmt->bind_param("i",$codigo);
        $stmt->execute();
        //SOLO CUANDO hacemos un SELECT devolvemos un array con fetch_assoc
        return $stmt->get_result()->fetch_assoc();

    }
}


?>