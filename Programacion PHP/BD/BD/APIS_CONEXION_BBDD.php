<?php

/*
    3 APIS A LA HORA D E CONSIDERAR CONECTAR A UNA BASE DE DATOS

    -1. MYSQL. Antigua y obsoleta
    -2. MYSQL. Extension mejorada de MySQL

    METODO 1: Conexión ORIENTADO A OBJETOS.

    METODO 2: Conexión Procedimental (Mediante funciones).

    -3. PDO (Objetos de datos PHP): Proporciona una capa de abstracción para el acceso a datos

*/


/*
1. Establecer conexion con BD.
2. Ejecutar sentencias SQL.
3. Obtendremos registros devuletos por sentencias SQL.
4. Transacciones.
5.Consultas preparadas.
6. Ejecutar procedimientos almacenados.
7. Gestionar los errores que se produzcan en la conexión.
8. Cerrar sesión. 
*/


/*
    Propiedades de configuracion que se encuentran en php.ini
    1.mysqli.allow_pesistent: Permite crear conexiones persistentes
    2.mysqli.reconnect = Indicar si queremos que se vuelva a contectar la conexion
    en caso de perderla
    3.mysqli.default_port: Puerto por defecto al que se conectará
    4.mysqli.default_host: Host por defecto al que se conectará
    5.mysqli.default_user: Nombre de usuario por defecto a usar en la conexión.
    6.mysqli.default_pw: Password de usuario por defecto a usar en la conexión

*/
?>