<?php
    // Nombre del servidor
    $host = "localhost";
    $puerto = "3306";
    $usuario = "root";
    $contrasena = "";
    $baseDatos= "bdbiblioteca";

    function Conectarse()
    {
        global $host, $usuario, $contrasena, $baseDatos;
        if(!($link = mysqli_connect($host,$usuario,$contrasena)))
        {
            echo "Error al conectar al servidor de base de datos";
            exit();
        }
        else echo "Conexion establecida correctamente";
        echo "<br>";
        if(!mysqli_select_db($link,$baseDatos))
        {
            echo "Error al conectarse a la base de datos";
            exit();
        }
        else echo "Se pudo establecer la conexion con la base de datos";
        return $link;
    }
?>