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

        public function addContacto($nombre,$email,$telefono,$direccion,){
            try{

                $nuevoContacto = $this->contactoModel->addContactos($nombre,$email,$telefono,$direccion);
                echo "El contacto con nombre '$nombre' ha sido añadido";
                return $nuevoContacto;
            }catch(Exception $e){
                return "Error al añadir contacto: ".$e->getMessage();
            }
        
        }


        public function updateContacto($nombre, $email,$telefono,$direccion,$id){
            try{
                $updateContacto = $this->contactoModel->updateContacto($id,$nombre, $email,$telefono,$direccion);
                echo "Contacto actualizado correctamente";
                return $updateContacto;
            }catch(Exception $e){
                return "Error al actualizar el contacto con id $id: ".$e->getMessage();
            }
        }

        public function deleteContacto($id){
            try{
                $deleteContacto = $this->contactoModel->deleteContacto($id);
                echo "Contacto eliminado correctamente";
                return $deleteContacto;
            }catch(Exception $e){
                return "El contacto con id $id no se ha podido eliminar: ".$e->getMessage();
            }
        }

    
        public function idExist($id){
            return $idExist = $this->contactoModel->idExist($id);
        }
    }



?>