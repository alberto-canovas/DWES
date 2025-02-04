<!-- Controller tendrá toda la lógica -->

<?php

require_once '../Models/ProductoModel.php';

class ProductoController{
    
    private $productoModel;
    
    public function __construct(){
        $this->productoModel = new ProductoModel();
    }

    public function gestionarProducto($codigo,$nombre,$precio,$cantidad){
        $mensaje= "";
        //LÓGICA
        //$this->productoModel->insertar();

        return $mensaje;
    }

}

?>