<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <!--Barra de Navegacion-->
        <nav>

            <head>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <img alt="Bootstrap Image Preview" src="images/banner.jpg">
                            </div>
                            <div class="col-md-4">
                                <h3>
                                    Escuela profesional de ingenieria de sistemas.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </head>

            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mision.html">Mision - Vision</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="perfil.php">Perfil profesional<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="estadistica.php">Estadisticas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="docente.php">Docentes</a>
                                </li>
                            </ul>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="text">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </nav>
        <!--Parte Principal-->
        <main>
            <div class="row">
                <div class="col-md-8">
                <!--Mostrar autor de la base de datos bdBiblioteca-->
                <?php
                    // Conectarse a mariaDB
                    $link = mysqli_connect('localhost','root','')
                        or die('No se pudo conectar al servidor de la base de datos');
                    // Accediendo a la base de datos
                    mysqli_select_db($link,'bdbiblioteca')
                        or die('No se pudo conectar a la base de datos Biblioteca');
                    // Consultar la tabla Autor
                    echo "Tabla Autor";
                    $consulta = "SELECT * FROM tautor";
                    $resultado = mysqli_query($link,$consulta)
                        or die('Consulta a tabla tautor fallida');
                    // Imprimir los resultados
                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>codautor</th>";
                    echo "<th>apellidos</th>";
                    echo "<th>nombres</th>";
                    echo "<th>nacionalidad</th>";
                    echo "<th>profesion</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row = mysqli_fetch_array($resultado))
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo $row["codautor"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["apellidos"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["nombres"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["nacionalidad"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["profesion"];
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                    // Consultar la tabla Libro
                    echo "Tabla Libro";
                    $consulta = "SELECT * FROM tlibro";
                    $resultado = mysqli_query($link,$consulta)
                        or die('Consulta a tabla tlibro fallida');
                    // Imprimir los resultados
                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>codlibro</th>";
                    echo "<th>titulo</th>";
                    echo "<th>editorial</th>";
                    echo "<th>a??o</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row = mysqli_fetch_array($resultado))
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo $row["codlibro"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["titulo"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["editorial"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["anio"];
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<br>";
                    // Consultar la tabla Prestamo
                    echo "Tabla Prestamo";
                    $consulta = "SELECT * FROM tprestamo";
                    $resultado = mysqli_query($link,$consulta)
                        or die('Consulta a tabla tprestamo fallida');
                    // Imprimir los resultados
                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>codautor</th>";
                    echo "<th>codlibro</th>";
                    echo "<th>fecha prestamo</th>";
                    echo "<th>fecha devolucion</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row = mysqli_fetch_array($resultado))
                    {
                        echo "<tr>";
                        echo "<td>";
                        echo $row["codautor"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["codlibro"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["fechaprestamo"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["fechadevolucion"];
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Liberar recursos
                    mysqli_free_result($resultado);
                    // Cerrar sesion en mariaDB
                    mysqli_close($link);
                ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </main>

        <footer>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </footer>
    </div>

    <style>
        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            margin: 45px;
            width: 480px;
            text-align: left;
            border-collapse: collapse;
        }

        th {
            font-size: 13px;
            font-weight: normal;
            padding: 8px;
            background: #b9c9fe;
            border-top: 4px solid #aabcfe;
            border-bottom: 1px solid #fff; color: #039;
        }

        td {
            padding: 8px;
            background: #e8edff;
            border-bottom: 1px solid #fff;
            color: #669;
            border-top: 1px solid transparent;
        }

        tr:hover td {
            background: #d0dafd;
            color: #339;
        }
    </style>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>