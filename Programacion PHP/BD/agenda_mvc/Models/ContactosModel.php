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
            return "contacto añadido";
        }

        public function listarContactos(){
            $consulta = "SELECT * FROM contactos";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->execute();
            return $stmt->get_result();//->fetch_all(MYSQLI_ASSOC);        
        }

        
        public function updateContacto($id,$nombre,$email,$tlf,$direccion){
            $consulta = "UPDATE contactos SET nombre = ?, email = ?, direccion = ?, tlf = ?
            where id = ? ";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->bind_param("sssii",$nombre,$email,$direccion,$tlf,$id);
            return $stmt->execute();
        }

        public function deleteContacto($id){
            $consulta = "DELETE from contactos where id = ?";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->bind_param("i",$id);
            return $stmt->execute();
        }

        public function idExist($id){
            $consulta = "SELECT nombre FROM contactos WHERE id_contacto = ?";
            $stmt = $this->conexionBD->prepare($consulta);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->store_result(); // Necesario para usar num_rows
        
            return $stmt->num_rows > 0; // Devuelve true si hay al menos un resultado, false si no
        }



    }



?>