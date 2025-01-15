<?php
// echo"<pre>";
// print_r($_GET["peso"]);
// echo"</pre>";

//verificar que los campos están en la URL
if(isset($_GET["peso"])
&&isset($_GET["altura"])
&& ($_GET["peso"] !== '')
&& ($_GET["altura"] !== '')
){

    $peso = $_GET["peso"];
    $altura = $_GET["altura"]/100;
    
    $imc= $peso / ($altura * $altura);
    // ** 2 (elevar a 2)
    
    echo "<br> El índice de masa corporal de una persona que pesa " .$peso. " kg y mide ". $altura." metros es de " .round($imc);
}else{
    echo"<p> No se han proporcionado los datos de peso y altura ";
}
    ?>