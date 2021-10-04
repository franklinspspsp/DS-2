<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>

<body>
    <form action="#" method="POST">
        <p><input type="text" name="txtProducto1" value=""></p>
        <p><input type="text" name="txtProducto2" value=""></p>
        <p><input type="text" name="txtProducto3" value=""></p>
        <p><input type="text" name="txtProducto4" value=""></p>
        <p><input type="submit" name="btnCalcular" value="calcular"></p>
        <p><input type="submit" name="btnDatos" value="Datos del autor"></p>
    </form>
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
    else if(isset($_POST['btnDatos']))
    {
        echo "Datos: Franklin Soto Pacco";
    }
?>
</body>

</html>