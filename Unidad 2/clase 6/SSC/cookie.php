
<html>
	<body>
	<form action="" method="post">
	<p>Ingrese su nombre: <input type="text" name="txtNombre"></p>
	<p>Ingrese su apellido: <input type="text" name="txtApellido"></p>
	<p><input type="submit" name="btnEnviar" value="Enviar"></p>
	<p><input type="submit" name="btnRecuperar" value="Recuperar"></p>
	</form>
	</body>
</html>
<?php
	// Almacenar el valor de la Cookie
	if(isset($_POST["btnEnviar"]))
	{
		$nombre = $_POST["txtNombre"];
		$apellido = $_POST["txtApellido"];
		setcookie("nombre_cookie", $nombre . ' ' . $apellido , time() + 30*24*60*60); //guardamos la cookie
		echo "Cookie grabada";
	}
	else if (isset($_POST["btnRecuperar"]))
		echo "El valor de la cookie nombre_cookie es: " . $_COOKIE["nombre_cookie"]; //imprimimos el valor
?>