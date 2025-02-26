<?php

require_once __DIR__ ."/../Models/ProductoModel.php";

class ProductoController{
    private $productoModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
    }
    
    public function obtenerProductos($codigo_producto){
        
        try{
            $productos = $this->productoModel->obtenerProductos();
            echo "consulta realizada";
            return $productos;
            
        }catch(Exception $e){
            return "Error en la transaccion ".$e->getMessage();
        }
        
    }
}
?>