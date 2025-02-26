<?php

    require_once __DIR__."/ConexionModel.php";

    class ContactosModel {
        private $conexionBD;

        public function __construct(){

            $this->conexionBD = (new ConexionModel())->connect();
        }

        public function addContactos($nombre,$email,$tlf,$direccion){
            $consulta = "INSERT INTO contactos (nombre,email,tlf,direccion) VALUES(?,?,?,?)";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->bind_param("ssis",$nombre,$email,$tlf,$direccion);
            $stmt->execute();
            return "<br> contacto añadido";
        }

        public function listarContactos(){
            $consulta = "SELECT * FROM contactos";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->execute();
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);        
        }

        public function deleteContacto($id){
            $consulta = "DELETE FROM contactos WHERE id_contacto = ?";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            return "<br> contacto eliminado";
        }
        




    }



?>