<?php
class ConexionPDO_NO_STATIC{

    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $bdname = "dwes";
    private $conexion = null;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        try{
            $this->conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->bdname.";charset=UTF8",$this->usuario,$this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $e){   
            error_log("Error de conexion con BD ".$e->getMessage());
        }
    }

    public function getConnection(){
        if($this->conexion === null){
            return $this->connect();
        }
        return $this->conexion;
    }
}



?>