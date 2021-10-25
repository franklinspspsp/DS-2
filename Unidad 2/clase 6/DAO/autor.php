<!DOCTYPE html>
<html>
<head>
	<title>Mantenimiento de Autor</title>
</head>
<body>
	<?php
	include ('DAO/AutorDAO.php');
	$dao = new AutorDAO();
	if($_POST){
		if(isset($_POST['btnAgregar'])) {
			$autor = new Autor();
			$autor->setCodAutor($_POST["txtcodautor"]);
			$autor->setApellidos($_POST["txtapellidos"]);
			$autor->setNombres($_POST["txtnombres"]);
			$autor->setNacionalidad($_POST["txtnacionalidad"]);
			$autor->setProfesion($_POST["txtprofesion"]);
			$i =  $dao->Agregar($autor);
			if ($i == 1) {
				echo "<script>alert('Se agrego autor');</script>";
			}
			else {
				echo "<script>alert('Error: no se agrego autor');</script>";
			}
		}
		else if (isset($_POST['btnEliminar']))
		{
			$i = $dao->Eliminar($_POST["txtcodautor"]);
			if ($i == 1) {
				echo "<script>alert('Se elimino autor');</script>";
			}
			else {
				echo "<script>alert('Error: no se elimino autor');</script>";
			}
		}
		else if (isset($_POST['btnActualizar'])) {
			$autor = new Autor();
			$autor->setCodAutor($_POST["txtcodautor"]);
			$autor->setApellidos($_POST["txtapellidos"]);
			$autor->setNombres($_POST["txtnombres"]);
			$autor->setNacionalidad($_POST["txtnacionalidad"]);
			$autor->setProfesion($_POST["txtprofesion"]);
			$i =  $dao->Actualizar($autor);
			if ($i == 1) {
				echo "<script>alert('Se actualizo autor');</script>";
			}
			else {
				echo "<script>alert('Error: no se actualizo autor');</script>";
			}
		}
	}
	?>
	<form action="#" method="POST">
		<p>Mantenimiento de Autor</p>
		<p>CodAutor:  <input type="text" name="txtcodautor"></p>
		<p>Apellidos:  <input type="text" name="txtapellidos"></p>
		<p>Nombres:  <input type="text" name="txtnombres"></p>
		<p>Nacionalidad:  <input type="text" name="txtnacionalidad"></p>
		<p>Profesion:  <input type="text" name="txtprofesion"></p>
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

