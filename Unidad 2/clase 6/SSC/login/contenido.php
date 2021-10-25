<?php
	session_start();
	echo "Hola " . $_SESSION['usuario'];
	echo "<br/>";
	echo "<a href='recuperar.php'><input type='button' value='Recuperar'></a>";
?>