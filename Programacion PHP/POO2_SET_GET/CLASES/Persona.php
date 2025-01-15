<?php

class Persona{
    private $nombre;
    private $edad;
    private $nuevasPropiedades = [];

    public function __construct($nombre,$edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }


    public function __get($name)
    {
        echo "LLamando a GET: Obteniendo el valor de la propiedad '$name'<br>";
        return $this->nuevasPropiedades[$name];
        
    }

    public function __set($name, $value)
    {
        echo "Llamando a SET: Añadiendo propiedad '$name'con valor '$value' <br>";
        $this->nuevasPropiedades[$name] = $value;
        
    }


    public function mostrarInformacion(){
        echo "Nombre: {$this->nombre}, Edad: {$this->edad} <br>";
        foreach ($this->nuevasPropiedades as $key => $value) {
            echo $key.": ". $value . "<br>";
        }

        echo"Información Clase Persona";
        echo print_r($this);
    }
}

?>