<!DOCTYPE html>
<html>
<head>
    <title>Mantenimiento de Libro</title>
</head>
<body>
    <?php
    include ('DAO/LibroDAO.php');
    $dao = new LibroDAO();
    if(isset($_POST['btnAgregar'])) {
        $libro = new Libro();
        $libro->setCodLibro($_POST["txtcodlibro"]);
        $libro->setTitulo($_POST["txttitulo"]);
        $libro->setEditorial($_POST["txteditorial"]);
        $libro->setAnio($_POST["txtanio"]);
        $i =  $dao->Agregar($libro);
        if ($i == 1) {
            echo "<script>alert('Se agrego libro');</script>";
        }
        else {
            echo "<script>alert('Error: no se agrego libro');</script>";
        }
    }
    else if (isset($_POST['btnEliminar']))
    {
        $i = $dao->Eliminar($_POST["txtcodlibro"]);
        if ($i == 1) {
            echo "<script>alert('Se elimino libro');</script>";
        }
        else {
            echo "<script>alert('Error: no se elimino libro');</script>";
        }
    }
    else if (isset($_POST['btnActualizar'])) {
        $libro = new Libro();
        $libro->setCodLibro($_POST["txtcodlibro"]);
        $libro->setTitulo($_POST["txttitulo"]);
        $libro->setEditorial($_POST["txteditorial"]);
        $libro->setAnio($_POST["txtanio"]);
        $i =  $dao->Actualizar($libro);
        if ($i == 1) {
            echo "<script>alert('Se actualizo libro');</script>";
        }
        else {
            echo "<script>alert('Error: no se actualizo libro');</script>";
        }
    }
    ?>
    <form action="#" method="POST">
		<p>Mantenimiento de Libro</p>
		<p>CodLibro:  <input type="text" name="txtcodlibro"></p>
		<p>Titulo:  <input type="text" name="txttitulo"></p>
		<p>Editorial:  <input type="text" name="txteditorial"></p>
		<p>Año:  <input type="text" name="txtanio"></p>
		<p><input type="submit" name="btnAgregar" value="Agregar" >
		<input type="submit" name="btnEliminar" value="Eliminar" >
		<input type="submit" name="btnActualizar" value="Actualizar" ></p>
	</form>
	<?php
		echo "Listar <br>";
		print_r($dao->Listar());
	?>
</body>
</html>