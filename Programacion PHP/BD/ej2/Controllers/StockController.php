<?php

require_once __DIR__."/../Models/StockModel.php";
require_once __DIR__."/../Models/ConexionModel.php";


class StockController{

    private $stockModel;
    private $conexion;

    public function __construct(){
        $this->stockModel = new StockModel();
        $this->conexion = ConexionModel::connect();
    }

    public function transferirUnidades($codigo_producto, $tienda_origen, $tienda_destino, $unidades){
        //Abrir una transaccion

        $this->conexion->begin_transaction();

        try{

            //llmar a funcion que reste las unidades en tienda origen que le paso por parametro a transferirUnidades
            $numeroFilasAfectadas = $this->stockModel->restarUnidades($codigo_producto,$tienda_origen,$unidades);
            if($numeroFilasAfectadas == 0){
                echo "filas afectadas 0";
            }
            //llmar a funcion que sume las unidades en tienda origen que le paso por parametro a transferirUnidades
            $this->stockModel->insertarUnidades($codigo_producto,$tienda_destino,$unidades);
            
            $this->conexion->commit();
            return "Transferencia realizada con éxito";

        }catch(Exception $e){
            $this->conexion->rollback();
            return "Error en la transferencia de unidades: ". $e->getMessage();
        }

        //$this->conexion->rollback();

        
    // public function gestionarStockTienda($cantidad,$tienda,$producto){

    //     try{

    //         $conexion =$this->conexion;
            
    //         $conexion->begin_transaction();
            
    //         $this->stockModel->update(($cantidad-1),$tienda,$producto);

    //         $this->stockModel->insert($cantidad,$tienda,$producto);
    //         $conexion->commit();
            
    //     }catch(Exception $e){
    //         $this->conexion->rollback();  
    //     }

    // }
    }

    
    public function obtenerStockPorCodigoProducto($codigo_producto){
        return $this->stockModel->obtenerStockPorCodigo($codigo_producto);
    }


    
}
?>