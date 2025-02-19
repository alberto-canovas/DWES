<?php

class AlumnosService{

    private $conexion;

    public function __construct(){

        $server = 'localhost';
        $userName = 'root';
        $pass = '';
        $db = 'ies_bd';
        
        try{

            $this->conexion = new PDO("mysql:host=$server; dbname=$db; charset=UTF8",$userName,$pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "conexión realizada con éxito <br>";
        }catch(Exception $e){
            throw new Exception("Error al conectar con ies_bd".$e->getMessage());  
        }        
        
    }

    public function getHola($nombre){
        return "Hola ". $nombre .", estamos en Alumno Service";
    }



    public function obtenerAlumno($id){
        try{
            $stmt = $this->conexion->prepare("SELECT * FROM alumnos where (id = :id)");
            $stmt->execute([":id"=> $id]);
            $usuario = $stmt ->fetch(PDO::FETCH_ASSOC);
            if($usuario){
                return $usuario;
            }else{
                return "Alumno no encontrado";
            }

            }catch(Exception $e){
                return "Error al obtener Alumno: ".$e->getMessage();
            }
    }
}

?>