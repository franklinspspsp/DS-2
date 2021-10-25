<?php
  session_start();
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['txtUsuario'];
  $password = $_POST['txtPassword'];

  if ($usuario == "juan" and $password == "123")
  {
    // Guardo la sesion del Usuario.
    $_SESSION['usuario'] = $usuario;
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: contenido.php");
  }else{
    // Nos vamos a la pagina inicial
    header("Location: index.html");
  }
?>