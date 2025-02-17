<?php


class ConexionModel {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'agenda';
    private $conexion;
    

    public function __construct(){
        try{
            $this->conexion = new mysqli($this->server, $this->username, $this->password, $this->database);
            echo'Conexión establecida'; 
        }catch(Exception $e){
            echo "Error al crear la conexión: ".$e->getMessage();
        }

    }

    public function connect( ){
        return $this->conexion;
    }
}

?>