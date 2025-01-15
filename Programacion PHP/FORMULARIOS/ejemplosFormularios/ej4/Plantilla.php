<fieldset>
            <legend>Datos del empleado</legend>

            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <br><br>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos">
                <br><br>
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad">
                <br><br>
                <label for="salario">Salario</label>
                <input type="number" name="salario" id="salario">
                <br><br>
                <input type="submit" value="ENVIAR">


            </form>

        </fieldset>
