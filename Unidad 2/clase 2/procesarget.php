<?php
    if(isset($_GET["btnCalcular"]))
    {
        $nro1 = $_GET["txtNro1"];
        $nro2 = $_GET["txtNro2"];
        $promedio = ($nro1 + $nro2) / 2;
        echo "El promedio de los numeros es: ", $promedio;
    }
?>