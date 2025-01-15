<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <p>
        <label for="nombre">Nombre</label>
        <!-- en el value estamos metiendo la funcion  mostrar_campo que hemos realizado en Formulario4.php-->
        <input type="text" id="nombre" name="nombre" <?php mostrar_campo("nombre")?>>
        <?php mostrarErrores2("nombre",$errores)?>
    </p>

    <p>
        <label for="email">email</label>
        <input type="email" id="email" name="email" <?php mostrar_campo("email")?>>
        <?php mostrarErrores2("email",$errores)?>

    </p>

    <p>
        <label for="clave">Clave</label>
        <input type="password" id="clave" name="clave" <?php mostrar_campo("clave")?>>
        <?php mostrarErrores2("clave",$errores)?>

    </p>

    <p>
        <label for="clave2">Repetir clave</label>
        <input type="password" id="clave2" name="clave2" <?php mostrar_campo("clave2")?>>
        <?php mostrarErrores2("clave2",$errores)?>

    </p>

    <input type="submit" value="Registrarse">
</form>