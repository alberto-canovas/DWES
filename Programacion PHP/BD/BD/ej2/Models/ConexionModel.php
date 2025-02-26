<?php

class ConexionModel{
    private static $server ="localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "dwes";

    private static $conexion = null;

    //al ser la clase estática NUNCA va a crear más de una conexión
    //PARA HACER más de una conexión mirar en Productos_MVC
    public static function connect(){
        if(self::$conexion === null){

            //CREAMOS LA CONEXIÓN
            try{
                self::$conexion = new mysqli(self::$server, self::$username, self::$password, self::$database);
                echo "Conectado a la base de datos";

            }catch(Exception $e){
                if(self::$conexion ->connect_error){
                    echo "Error en la conexión: " . self::$conexion->connect_error;
                }else{
                    echo "Exception capturada: ". $e->getMessage();;
                }
    
            exit();
            }
        }
        //devolvemos la conexión creada
        //si ya está creada no hace falta volver a crearla

        return self::$conexion;
    }   

}

?>