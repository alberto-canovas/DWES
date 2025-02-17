<?php

class ConexionPDOModel {

    private $server = 'localhost';
    private $userName = 'root';
    private $password = '';
    private $database = 'agenda';
    private $conexion;

    //conexion
    public function __construct() {
        try{
            $this->conexion = new PDO("mysql:host=".$this->server."; db=".$this->database."; charset=UTF8",$this->userName,$this->password);
            echo "Conexión realizada con éxito";

        }catch(Exception $e){
            echo "Error al realizar la conexión: ".$e->getMessage();
        }
    }


    public function getConnection(){
        return $this->conexion;
    }

}

?>