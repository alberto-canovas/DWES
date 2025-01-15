<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilos/estilo1.css">
    <title>Document</title>

</head>
<body>
    <header>
        <h1>Convierte segundos a minutos</h1>
    </header>
    
    <main>
        <form action= "<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
        Escriba una cantidad en segundos y la convertirá en minutos y segundos
        <br><br>
        <label for="segundos">Segundos</label>
        <input type="text" name="segundos" id="segundos">
        <br><br>
        <input type="submit">
        </form>
        <?php
        if($_POST){
            if(isset($_POST["segundos"]) && $_POST["segundos"] !== ''){
                $segundos = $_POST["segundos"];

                $minutos_convertidos = (int) ($segundos / 60);

                $segundos_convertidos = $segundos % 60;

                echo "$segundos segundos son $minutos_convertidos minutos y $segundos_convertidos segundos";
            }

        }else{?>
                <form action= "<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
            Escriba una cantidad en segundos y la convertirá en minutos y segundos
            <br><br>
            <label for="segundos">Segundos</label>
            <input type="text" name="segundos" id="segundos">
            <br><br>
            <input type="submit">
            </form>
            <?php
        }

        ?>
    </main>
    
    
    <footer></footer>
   
</body>
</html>