<?php
	// Manejo de Sesiones en PHP
	session_start();
	$_Session['nombre'] = 'Juan';
	$_Session['apellido'] = 'Perez';
	$_Session['dni'] = '19283746';
	// Imprimir sesiones
	echo $_Session['nombre'] . '<br/>';
	echo $_Session['apellido'] . '<br/>';
	echo $_Session['dni'] . '<br/>';
	// Destruir una variable Session
	session_destroy();
?>
