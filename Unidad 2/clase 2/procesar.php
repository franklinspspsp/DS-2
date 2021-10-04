<?php
    // Verificar que el usuario ha hecho click en el boton calcular
    if(isset($_POST['btnCalcular']))
    {
        // Recuperar los precios de los productos
        $precio1 = $_POST['txtProducto1'];
        $precio2 = $_POST['txtProducto2'];
        $precio3 = $_POST['txtProducto3'];
        $precio4 = $_POST['txtProducto4'];
        $subtotal = $precio1 + $precio2 + $precio3 + $precio4;
        $igv = $subtotal + 0.18;
        $total = $subtotal + $igv;
        echo "El subtotal es: ", $subtotal, "<br>";
        echo "El IGV es: ", $igv, "<br>";
        echo "El total es: ", $total, "<br>";
    }
?>