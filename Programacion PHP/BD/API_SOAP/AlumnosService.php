<?php

class AlumnosService{

    private $conexion;

    public function __construct(){

        $server = 'localhost';
        $userName = 'root';
        $pass = '';
        $db = 'ies_bd';
        
        try{

            $conexion = new PDO("mysql:host=$server; dbname=$db; charset=UTF8",$userName,$pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "conexión realizada con éxito <br>";
        }catch(Exception $e){
            throw new Exception("Error al conectar con ies_bd".$e->getMessage());  
        }        
        
    }

    public function getHola($nombre){
        return "Hola ". $nombre .", estamos en Alumno Service";
    }
}

?>