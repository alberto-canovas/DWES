<?php
class ConexionPDO_STATIC{

    private static $server = "localhost";
    private static $usuario = "root";
    private static $pass = "";
    private static $bdname = "dwes";
    private static $conexion = null;

    public static function connect(){
        if(self::$conexion === null){

            try{
                self::$conexion = new PDO("mysql:host=".self::$server.";dbname=".self::$bdname.";charset=UTF8",self::$usuario,self::$pass);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){   
                error_log("Error de conexion con BD ".$e->getMessage());
            }
        }
        return self::$conexion;
    }

    
}



?>