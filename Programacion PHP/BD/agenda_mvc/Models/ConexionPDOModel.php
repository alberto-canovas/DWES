<?php

class ConexionPDOModel {

    private $conexion;
    
    //conexion
    public function __construct() {
        $server = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'agenda';

        try{
            $this->conexion = new PDO("mysql:host=".$server."; dbname=".$database."; charset=UTF8",$userName,$password);
            echo "Conexión PDO realizada con éxito";

        }catch(Exception $e){
            echo "Error al realizar la conexión PDO: ".$e->getMessage();
        }
    }


    public function getConnection(){
        return $this->conexion;
    }

}

?>