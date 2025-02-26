<!-- Model tendrá todo lo relacionado con las consultas y conexiones a BBDD -->


<?php

class ConexionModel {

    private $server = "localhost";
    private $userName = "root";
    private $pass="";
    private $db = "tienda";
    private $conexion;

    public function __construct() {
        try{
            $this -> conexion = new mysqli($this->server, $this ->userName, $this->pass, $this->db); 

        }catch(Exception $e){
            if($this->conexion->connect_errno){
                echo "Error en la conexión: " . $this->conexion->connect_error;
            }else{
                echo "Exception capturada: ". $e->getMessage();;
            }

        exit();
        }

    }

 public function getConnection() {
    return $this -> conexion;
    }
}

?>