<?php

require_once 'ConexionModel.php';

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

    }

    public function eliminar($codigo){

    }

    public function getProducto($codigo){
        $consulta = "SELECT INTO productos WHERE productos.codigo == $codigo";
        

    }
}


?>