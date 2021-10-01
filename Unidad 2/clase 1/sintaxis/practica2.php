<?php
    // Modularidad en PHP
    function Sumar($nro1,$nro2)
    {
        return $nro1 + $nro2;
    }
    function Restar($nro1,$nro2)
    {
        if($nro1 > $nro2)
            return $nro1 - $nro2;
        else
            echo "El segundo numero es mayor","<br>";
    }
    function Multiplicar($nro1,$nro2)
    {
        return $nro1 * $nro2;
    }
    function Dividir($nro1,$nro2)
    {
        return $nro1 / $nro2;
    }
    function Factorial($nro)
    {
        $fact=1;
        for($i=1;$i<=$nro;$i++)
        {
            $fact *= $i;
        }
        return $fact;
    }
    function Potencia($base, $exp)
    {
        if($exp == 0)
            return 1;
        else
            return $base * Potencia($base, $exp - 1);
    }
    function seno($data)
    {
        return (sin(deg2rad($data)));
    }
    function coseno($data)
    {
        return (cos(deg2rad($data)));
    }
    function tangente($data)
    {
        return tan((($data * pi())/ 180));
    }
    function Inverso($nro)
    {
        $num = (string)$nro;
        $revstr = strrev($num);
        $reverse = (int) $revstr;
        return $reverse;
    }
    echo "La suma de 3 y 5 es: ", Sumar(3,5), "<br>";
    echo "La resta de 3 y 5 es: ", Restar(5,3), "<br>";
    echo "La multiplicacion de 3 y 5 es: ", Multiplicar(2,5), "<br>";
    echo "La division de 3 y 5 es: ", Dividir(10,5), "<br>";
    echo "El factorial de 5 es: ", Factorial(5), "<br>";
    echo "La potencia de 2 elevado a la 5 es: ", Potencia(2,5), "<br>";
    echo "El seno de 45 es: ", seno(45), "<br>";
    echo "El coseno de 45 es: ", coseno(45), "<br>";
    echo "La tangente de 45 es: ", tangente(45), "<br>";
    echo "El inverso de 123 es: ", Inverso(123), "<br>";
?>