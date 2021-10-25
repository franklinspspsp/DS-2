<?php
    session_start();
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $dni = $_SESSION['dni'];
    echo "Bienvenido $nombre $apellido, tu dni es $dni";
    echo $_SESSION['nombre'];
    echo $_SESSION['apellido'];
    echo $_SESSION['dni'];
?>