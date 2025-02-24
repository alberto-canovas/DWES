<?php

    require_once __DIR__ ."/../Models/ContactosModel.php";
    require_once __DIR__ ."/../Models/ContactosModel.php";

     class ApiSoapContactosController {
        private $contactoModel;

        public function __construct(){
            $this->contactoModel = new ContactosModel();
        }

        public function obtenerContactos(){
            try{
                $contactos = $this->contactoModel;
                return $contactos->listarContactos();

            }catch(Exception $e){
                return " <br>Error al obtener los contactos: " .$e->getMessage();
            }
        }

        public function addContacto($nombre,$email,$telefono,$direccion){
            try{
                $nuevoContacto = $this->contactoModel->addContactos($nombre,$email,$telefono,$direccion);
                echo "<br> El contacto con nombre '$nombre' ha sido añadido";
                return $nuevoContacto;
            }catch(Exception $e){
                return " <br> Error al añadir contacto: ".$e->getMessage();
            }
        
        }

    
        public function deleteContacto($id){
            try{
                $deleteContacto = $this->contactoModel->deleteContacto($id);
                echo "<br> El contacto ha sido eliminado";
                
            }catch(Exception $e){
                return " <br> Error al eliminar contacto: ".$e->getMessage();
            }
        
        }
    }



?>