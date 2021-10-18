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
        if(!mysqli_select_db($link,$baseDatos))
        {
            echo "Error al conectarse a la base de datos";
            exit();
        }
        return $link;
    }
?>