<?php

    require_once __DIR__."/ConexionPDOModel.php";

    class ContactosModel{
        private $conexionBD;

        public function __construct(){
            //creamos una conexión
            $this->conexionBD = (new ConexionPDOModel())->getConnection();
        }

        public function addContactosPDO($nombre,$email,$telefono,$direccion){
            $consulta = "INSERT INTO contactos (nombre,email,tlf,direccion) VALUES(:nombre,:email,:tlf,:direccion)";
            $stmt= $this->conexionBD->query($consulta);
            $stmt->bindParam("nombre", $nombre);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("telefono", $telefono);
            $stmt->bindParam("direccion", $direccion);
            $stmt->execute();
        }

        public function listarContactos(){
            $consulta = "SELECT * FROM agenda";
            $stmt= $this->conexionBD->prepare($consulta);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultado as $fila){
                echo "<pre>";
                print_r($fila);
                echo "<br>";
            }
            

            
        }


    }

?>