<!-- Controller tendrá toda la lógica -->

<?php

require_once __DIR__.'/../Models/ProductoModel.php';

class ProductoController{
    
    private $productoModel;
    
    public function __construct(){
        $this->productoModel = new ProductoModel();
    }

    public function gestionarProducto($codigo,$nombre,$precio,$cantidad){
        try{
            $mensaje= "Productos insertados correctamente";
            //LÓGICA

            if(empty($codigo)){
                $mensaje= "No se ha detectado ningún código";
            
            }elseif(!empty($codigo) && (empty($nombre) || empty($precio) || empty($cantidad))){
                echo"borrado";
                $this->productoModel->eliminar($codigo);
                $mensaje= "El producto con código $codigo ha sido eliminado";

            }elseif(($this->productoModel->getProducto($codigo))==!null || ($this->productoModel->getProducto($codigo))==true && !empty($nombre) && !empty($precio) && !empty($cantidad)){
                
                $this->productoModel->actualizar($codigo,$nombre,$precio,$cantidad);
                $mensaje= "El producto con código $codigo ha sido actualizado";
            }else{
                $this->productoModel->insertar($codigo,$nombre,$precio,$cantidad);
                $mensaje= "Se ha creado el producto con codigo $codigo";
            }

        }catch(Exception $e){

            return "Error al gestionar el producto". $e->getMessage();
        }
        
        

        return $mensaje;
    }

}


?>