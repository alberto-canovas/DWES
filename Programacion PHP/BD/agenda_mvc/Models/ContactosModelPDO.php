<?php

    require_once __DIR__."/ConexionPDOModel.php";

    class ContactosModelPDO{
        private $conexionBD;

        public function __construct(){
            //creamos una conexión PDO
            $this->conexionBD = (new ConexionPDOModel())->getConnection();
            
            
        }


        public function addContactosPDO($nombre,$email,$telefono,$direccion){
            $consulta = "INSERT INTO contactos (nombre,email,tlf,direccion) VALUES(:nombre,:email,:tlf,:direccion)";
            $stmt= $this->conexionBD->prepare($consulta);
            $stmt->bindParam("nombre", $nombre);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("telefono", $telefono);
            $stmt->bindParam("direccion", $direccion);
            return $stmt->execute();
            
        }

        public function listarContactosPDO(){
            $consulta = "SELECT * FROM contactos";
            $stmt= $this->conexionBD->query($consulta);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;

        }




    }

?>