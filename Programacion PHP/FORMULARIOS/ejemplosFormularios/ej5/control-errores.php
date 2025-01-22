<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Formulario de Ejemplo</legend>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <label>Nombre
                <input type="text" name="nombre" id="nombre">
            </label>
            
            <br><br>

            <label>
                Apellidos
                <input type="text" name="apellidos" id="apellidos">
            </label>

            <br><br>

            <label>
                Contraseña
                <input type="password" name="password" id="password">
            </label>

            <br><br>
            
            <label>Telefono
                <input type="text" name="telefono" id="telefono">
            </label>
            
            <br><br>

            <label>Email
                <input type="email" name="email" id="email">
            </label>
            
            <br><br>

            <label>Comentario
                <textarea name="comentario" id="comentario"></textarea>
            </label>

            <br><br>
            
            <label>¿Tienes ordenador?</label>
            <br>
            
            <label for="radioSi">Si</label>
            <input type="radio" name="ordenador" id="radioSi" value="si">

            <label for="radioNo">No</label>
            <input type="radio" name="ordenador" id="radioNo" value="no">
            <br><br>

            <label for="aficiones">Aficiones</label>
            <br><br>
            <label>Futbol</label>
            <input type="checkbox" name="aficiones" id="futbol" value="futbol">
            <label>Atletismo</label>
            <input type="checkbox" name="aficiones" id="atletismo" value="atletismo">
            <label>Baloncesto</label>
            <input type="checkbox" name="aficiones" id="baloncesto" value="baloncesto">
            <br><br>
            <label for="provincia">Provincia</label>
            <select name="provincia" id="provincia">
                <option value="Murcia">Murcia</option>
                <option value="Sevilla">Sevilla</option>
                <option value="Malaga">Malaga</option>
                <option value="Almeria">Almeria</option>
                <option value="Madrid">Madrid</option>
                <option value="Galicia">Galicia</option>
            </select>
            <br><br>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR">
        </form>
    </fieldset>
        
    
    <?php
    if(!$_POST){
        
    }else{
        $errores=[];

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $comentario = $_POST["comentario"];
        $ordenador = $_POST["ordenador"];
        // $aficiones = $_POST["aficiones"];
        $provincia = $_POST["provincia"];
        
        if($nombre === '' || !isset($nombre)){
            $errores["nombre"]="El campo nombre está vacío";
        }elseif( is_numeric($nombre)){
            $errores["nombre"]="El campo nombre no puede tener números";
        };
        
        if($apellidos === '' || !isset($apellidos)){
            $errores["apellidos"]="El campo apellidos está vacío";
        }elseif( is_numeric($apellidos)){
            $errores["apellidos"]="El campo apellidos no puede tener números";
        };
        
        if(!isset($telefono) || $telefono === ''){
            $errores["telefono"]="El campo teléfono está vacío";
        }elseif(!is_numeric($telefono)){
            $errores["telefono"]= "El campo teléfono SÓLO puede tener NÚMEROS";
        }elseif(strlen((string)$telefono)!==9){
            $errores["telefono"]="El campo teléfono tiene que tener  9 números";
        };

        if(empty($email)){
            $errores["email"]="El campo email está vacío";
        }elseif(strlen($email)<6){
            $errores["email"]="El campo email es demasiado corto";
        };

        if(empty($password)){
            $errores["password"]="El campo contraseña está vacío";
        }elseif(strlen($password)<5){
            $errores["password"]="El campo contraseña tiene que tener mínimo 5 caracteres";
        };

        if(!isset($_POST["ordenador"])){
            $errores["ordenador"] ="La pregunta '¿Tienes ordenador no ha sido respondida?'";
            $$_POST["ordenador"]='';
        }else{
            $ordenador=$_POST["ordenador"];
        };

        if (!isset($_POST["aficiones"])) {
            $errores["aficiones"] = "El campo aficiones está vacío";
            $$_POST["aficiones"]='';
        } else {
            $aficiones = $_POST["aficiones"]; // Esto será un array si se seleccionan opciones
        }

        if(!$errores){
            echo "<h2>Datos recibidos:</h2>";
            echo "Nombre: $nombre<br>";
            echo "Apellidos: $apellidos<br>";
            echo "Teléfono: $telefono<br>";
            echo "Email: $email<br>";
            echo "Comentario: $comentario<br>";
            echo "Ordenador: $ordenador <br>";
            echo "Aficiones: $aficiones <br>";
            echo "Provincia: $provincia <br>";
        }else{
            print_r($errores);
        }
    }
    
    
    
    ?>

</body>
</html>