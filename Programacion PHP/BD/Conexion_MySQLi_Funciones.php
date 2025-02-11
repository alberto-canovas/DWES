<?php

//echo phpinfo();
//------ CONEXION CON BD METODO PROCEDIMENTAL (Funciones) -------

$server = "localhost";
$userName = "root";
$pass="";
$db = "ies_bd";

try{
    //$conexion = mysqli_connect("localhost","root","","ies_bd") ;
    $conexion = mysqli_connect($server,$userName,$pass,$db); 
    echo "Conexion a BD realizada correctamente";

    //----------    obtener conjuntos de datos --------

    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion, $consulta);
    //los dtos se devuelven en forma de objeto
    // resultado es un objeto de tipo mysq_result
    // Si la consulta se ejecuta correctamente se devuleven las filas obtenidas
    // si hay error devuelve false

    if($resultado){
        echo"<br>Consulta ejecutada correctamente";

        //mysqli_fetch_array obtiene un registro completo del conjunto de resultados
        // contiene el array tanto con claves numericas como con claves asociativas
        //cada vez que llame a la función me devolverá un registro

        $fila1= mysqli_fetch_array($resultado);
        $fila2= mysqli_fetch_array($resultado);
        $fila3= mysqli_fetch_array($resultado);
        $fila4= mysqli_fetch_array($resultado);

        // echo '<pre>';
        // print_r($fila1);
        // print_r($fila2);
        // print_r($fila3);
        // print_r($fila4);
        // echo '</pre>';


        //si no quedan filas la funcion devuelve false
        // while($fila = mysqli_fetch_array($resultado)){
        //     echo '<pre>';
        //     print_r($fila);
        //     echo '</pre>';
        // }

        //funciones para resetear el puntero
        mysqli_data_seek($resultado,0);

        //Almacena los datos en un array

        $datos1 = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        mysqli_data_seek($resultado,0);

        $datos2 = mysqli_fetch_all($resultado, MYSQLI_NUM);
        mysqli_data_seek($resultado,0);

        $datos3 = mysqli_fetch_all($resultado, MYSQLI_BOTH);
        mysqli_data_seek($resultado,0);


        // echo "<br> Array key asociativo";
        // echo '<pre>';
        // print_r($datos1);
        // echo '</pre> <hr>';

        // foreach($datos1 as $fila){
        //     echo "<pre>";
        //     print_r($fila);
        //     echo "</pre>";
        // }

        // echo "Array key numerica";
        // echo '<pre>';
        // print_r($datos2);
        // echo '</pre> <hr>';

        // echo "Array key ambas";
        // echo '<pre>';
        // print_r($datos3);
        // echo '</pre> <hr>';

        //te devuelve las filas con las claves numéricas
        mysqli_fetch_row($resultado);
        // while($fila = mysqli_fetch_row($resultado)){
        //     echo '<pre>';
        //     print_r($fila);
        //     echo '</pre>';
        // }

        //te devulve las filas con las claves asociativas(nombre de los campos)
        mysqli_fetch_assoc( $resultado);
        // while($fila = mysqli_fetch_assoc($resultado)){
        //     echo '<pre>';
        //     print_r($fila);
        //     echo '</pre>';
        // }



        // ------ TRANSACCIONES --------
        // Una transaccion es un conjunto de operaciones que se ejecutan en el servidor de BD
        // y se ejecutan en bloque y si se produce algun fallo entonces se revierten 
        // todos los cambios que hayamos ejecutado
        //
        //Por defecto cada una de las consultas SQL en PHP se ejecutan de forma AUTOCOMMIT
        //

        //Tenemos que desactivar el autocomit para poder manejarlo nosotros manualmente

        mysqli_autocommit($conexion,false);
        //acabamos de desactivarlo
        //todas las transacciones que se realicen en este momento no se van a ejecutar 
        //hasta que ejecutemos un commit

        $Consultaupdate1 = "UPDATE profesores SET  telefono = '777' where id = 1";
        $Consultaupdate2= "UPDATE profesores SET  telefono = '777' where id = 2";
        
        $resultado1 = mysqli_query($conexion,$Consultaupdate1);
        $resultado2 = mysqli_query($conexion,$Consultaupdate2);

        echo $resultado1;

    }else{
        echo "<br> Error al ejecutar la consulta";
    }

    }catch(Exception $e){
        //COMPROBAR ERRORES
        if(mysqli_connect_errno()){// mysqli_connect_errno() devuelve el número de error o bien un null si no se produce ningún error.
            
            echo "Error de conexion: ". mysqli_connect_error(); //mysqli_connect_error() devuelve la descripción del error o bien null si no se produce ningún error.
        }
    }
?>