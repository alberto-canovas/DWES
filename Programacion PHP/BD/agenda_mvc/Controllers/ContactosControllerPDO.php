<?php

    require_once __DIR__ ."/../Models/ContactosModelPDO.php";
    require_once __DIR__ ."/../Models/ContactosModel.php";

    class ContactosControllerPDO {
        private $contactoModelPDO;

        public function __construct(){
            $this->contactoModelPDO = new ContactosModelPDO();
        }

        public function obtenerContactos(){
            try{

                $contactos = $this->contactoModelPDO;
                return $contactos->listarContactosPDO();

            }catch(Exception $e){
                return "Error al obtener los contactos: " .$e->getMessage();
            }
        }

        public function addContacto($nombre,$email,$telefono,$direccion){
        
            try{
                $nuevoContacto = $this->contactoModelPDO->addContactosPDO($nombre,$email,$telefono,$direccion);
                echo "El contacto con nombre '$nombre' ha sido añadido";
                return $nuevoContacto;
            }catch(Exception $e){
                return "Error al añadir contacto: ".$e->getMessage();
            }
        
        }

    
    }



?>