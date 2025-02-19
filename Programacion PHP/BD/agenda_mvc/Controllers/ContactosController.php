<?php

    require_once __DIR__ ."/../Models/ContactosModel.php";
    require_once __DIR__ ."/../Models/ContactosModel.php";

    class ContactosController {
        private $contactoModel;

        public function __construct(){
            $this->contactoModel = new ContactosModel();
        }

        public function obtenerContactos(){
            try{

                $contactos = $this->contactoModel;
                return $contactos->listarContactos();

            }catch(Exception $e){
                return "Error al obtener los contactos: " .$e->getMessage();
            }
        }

        public function addContacto($nombre,$email,$telefono,$direccion){
        
            try{
                $nuevoContacto = $this->contactoModel->addContactos($nombre,$email,$telefono,$direccion);
                echo "El contacto con nombre '$nombre' ha sido añadido";
                return $nuevoContacto;
            }catch(Exception $e){
                return "Error al añadir contacto: ".$e->getMessage();
            }
        
        }

    
    }



?>