<?php
class Usuario implements IUsuario{
    public function obtenerRol(){
        echo "soy un usuario generico";
    }
}

class Lector extends Usuario implements IPrestamo{
public function prestarLibro($libro){

}

public function devolverLibro($libro){

}

};

class Bibliotecario extends Usuario implements IPrestamo,IGestion{

    public function gestionarInventario(){
        
    }

    public function prestarLibro($libro){

    }
    
    public function devolverLibro($libro){
    
    }
}

?>