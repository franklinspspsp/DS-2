<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 de PHP</title>
</head>

<body>
    <?php
        // Tipos de datos
        $a = 1; //Entero
        $b = 35.43; // Decimal
        $texto = "Bienvenido a PHP"; // Texto
        $d = true; //Boolean
        echo $a, "<br>", $b, "<br>", $texto, "<br>", $d, "<br>";
        // Declaracion de arreglos
        $nombre = "Juena Perez";
        echo var_dump($nombre);
        $arreglo = array(5,3,2,"Desarrollo de SW II",$nombre);
        // Numero de elemtos de arreglo
        $longitud = count($arreglo);
        echo "La longitud del arreglo es: ", $longitud, "<br>";
        for($i = 0; $i < $longitud; $i++)
        {
            echo $arreglo[$i],"<br>";
        }
    ?>
</body>

</html>