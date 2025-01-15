<?php

/*
1.

2. 

3.instanceof:Verifica si un objeto es una instancia de una clase específica

4. get_class: 

5. class_exist: Comprueba si la clase existe

6.get_declared_classes: Lista todas las clases declaradas en el script

7. class_alias: Permite crear un alias a la clase existente. Y a partir de ahí referirnos a la clase

8. get_class_vars: Devuelve las propiedades a las que tengas acceso.

9. 

*/


class UtilizacionObjetos{
    public static $propiedad1 = "valor propiedad 1";
    
    public $propiedad2 = "valor propiedad 2";

    public $propiedadPrivada = "valor privado";

    public function metodo1(){
        echo "Este es el método 1 <br>";
    }

    public function metodo2(){
        echo "Este es el método 2 <br>";
    }
}


echo '<pre>';

$objeto = new UtilizacionObjetos();

if($objeto instanceof UtilizacionObjetos){
    echo "3. Si, el objeto pertenece a la clase UtilizaciónObjetos <br>";
}

echo "4. El objeto es de la clase " . get_class($objeto) . "<br>";


if(class_exists('UtilizacionObjetos')){
    echo "5.La clase UtilizacionObjetos si existe <br>";
}else{
    echo "5. La clase UtilizacionObjetos no existe <br>";
}

if(class_exists('AAAA')){
    echo "5.La clase AAAAA si existe <br>";
}else{
    echo "5. La clase AAAA no existe <br>";
}

echo "6. Clases declaradas en el script <br>";

echo"<hr>";

print_r(get_declared_classes());

//Creamos el alias
class_alias('UtilizacionObjetos','aliasUtilizacionObjetos');

$objetoAlias = new aliasUtilizacionObjetos();
echo "7. El objeto creado con el alias es de la clase: ". get_class($objetoAlias);


echo "8. Propiedades estaticas de la clase ";

echo print_r(get_class_vars('UtilizacionObjetos'));

echo '<pre>';



?>