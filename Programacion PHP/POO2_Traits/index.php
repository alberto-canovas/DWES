<?php

class Producto{
    private $nombre;
    private $precioBase;

    public function __construct($nombre,$precioBase)
    {
        $this->nombre = $nombre;
        $this->precioBase = $precioBase;

        
    }

    public function getPrecioBase(){
        return $this->precioBase;
    }
    
    public function getNombre(){
        return $this->nombre;
    }



}



class Electrodomestico extends Producto{
    //con el trait y el use lo que hacemos es un copia y pega, ahora la clase electrodomestico tiene los métodos de descuento
    //la clase puede tener más de un trait, se agrega poniendo use Descuento,Stock; (añadiendo una coma y poniendo detrás el nombre del trait)
    use Descuento;

    public function mostrarDetalles(){
        echo "Electrodoméstico: {$this->getNombre()}";
        echo "Precio Base: {$this->getPrecioBase()}";
    }
}



class Mueble extends Producto{
    public function mostrarDetalles(){
        echo "Mueble: {$this->getNombre()}";
        echo "Precio Base: {$this->getPrecioBase()}";
    }
}


trait Descuento{
    private $descuento =0;
    public function getDescuento(){

        return $this->descuento;
    }

    public function setDescuento($porcentaje){
        return $this->descuento = $porcentaje;
    }

    public function calcularPrecio($precioBase){
        return $precioBase - ($precioBase * $this->descuento /100);
    }
}

?>