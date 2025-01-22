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
                <input type="text" name="nombre" id="nombre" <?php mostrar_campo("nombre")?>>
                <?php mostrarErrores2Rojo('nombre',$errores)?>
            </label>

            <br><br>

            <label>
                Apellidos
                <input type="text" name="apellidos" id="apellidos" <?php mostrar_campo("apellidos")?>>
                <?php mostrarErrores2Rojo('apellidos',$errores)?>
            </label>

            <br><br>

            <label>
                Contraseña
                <input type="password" name="password" id="password" <?php mostrar_campo("password")?>>
            
            </label>

            <br><br>
            
            <label>Telefono
                <input type="text" name="telefono" id="telefono"<?php mostrar_campo("telefono")?>>
                <?php mostrarErrores2Rojo('telefono',$errores)?>
            </label>
            
            <br><br>

            <label>Email
                <input type="email" name="email" id="email"<?php mostrar_campo("email")?>>
            </label>
            
            <br><br>

            <label>Comentario
                <textarea name="comentario" id="comentario"> </textarea>
            </label>

            <br><br>
            
            <label>¿Tienes ordenador?</label>
            <?php mostrarErrores2Rojo('ordenador',$errores)?>
            <br>
            
            <label for="radioSi">Si</label>
            <input type="radio" name="ordenador" id="radioSi" value="si">

            <label for="radioNo">No</label>
            <input type="radio" name="ordenador" id="radioNo" value="no">
            <br><br>

            <label for="aficiones[]">Aficiones</label>
            <br><br>

            <label>Futbol
                <input type="checkbox" name="aficiones[]" id="futbol" value="futbol">
            </label>

            <label>Atletismo
                <input type="checkbox" name="aficiones[]" id="atletismo" value="atletismo">
            </label>

            <label>Baloncesto
                <input type="checkbox" name="aficiones[]" id="baloncesto" value="baloncesto">
            </label>
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
        
    
    
    
    
    
    

</body>
</html>