<?php

//INTERFACES son como contratos a cumplir

interface IPrestamo{
    //Todas las clases que implementen esta interfaz deben
    //Todos los metodos de una interfaz deben ser publicos
    public function prestarLibro($libro);
    public function devolverLibro($libro);
}


?>