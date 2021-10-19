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
                                <h2 style="font-family: Times New Roman; font-size: 55px; color:blue">
                                    Escuela profesional de ingenieria de sistemas
                                </h2>
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
                                    <a class="nav-link" href="perfil.php">Perfil profesional</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="estadistica.php">Estadisticas<span class="sr-only">(current)</span></a>
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
                    <?php
                        include "conexion.php";
                        $linkA = Conectarse();
                        $linkL = Conectarse();
                        $linkP = Conectarse();

                        if($_POST)
                        {
                            // Tabla Autor
                            $codautorA = $_POST['txtCodAutorA'];
                            $apellidoA = $_POST ['txtApellidosA'];
                            $nombreA = $_POST ['txtNombresA'];
                            $nacionalidadA = $_POST ['txtNacionalidadA'];
                            $profesionA = $_POST ['txtProfesionA'];

                            if(isset($_POST['btnAgregarA']))
                            {
                                $consultaA = "insert into tautor values('".$codautorA."','".$apellidoA."','".$nombreA."','".$nacionalidadA."','".$profesionA."')";
                                $resultadoA = mysqli_query($linkA, $consultaA);
                                if($resultadoA) echo "<script>alert('Se agrego correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if (isset($_POST['btnEliminarA']))
                            {
                                $consultaA = "delete from tautor where codautor = '".$codautorA."'";
                                $resultadoA = mysqli_query($linkA, $consultaA);
                                if($resultadoA) echo "<script>alert('Se elimino correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnActualizarA']))
                            {
                                $actualizarA ="update tautor set apellidos='$apellidoA',nombres='$nombreA',nacionalidad='$nacionalidadA',profesion='$profesionA' where codautor='$codautorA'";
                                $resultadoA=mysqli_query($linkA,$actualizarA);
                                if($resultadoA) echo "<script>alert('se actualizo');</script>";
                            }

                            else if(isset($_POST['btnBuscarA']))
                            {
                                $consultaA = "select apellidos, nombres, nacionalidad, profesion from tautor where codautor = '$codautorA'";
                                $resultadoA = mysqli_query($linkA, $consultaA);
                                if($resultadoA)
                                {
                                    ?>
                                    <table>
                                        <thead>
                                            <th>Apellidos</th>
                                            <th>Nombres</th>
                                            <th>Nacionalidad</th>
                                            <th>Profesion</th>
                                        </thead>
                                        <?php
                                            while($rowA = mysqli_fetch_array($resultadoA))
                                            {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $rowA["apellidos"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowA["nombres"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowA["nacionalidad"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowA["profesion"];
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </table>
                                    <?php
                                }
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnListarA']))
                            {
                                $consultaA = "select * from tautor";
                                $resultadoA = mysqli_query($linkA, $consultaA);
                            }

                            // Tabla Libro
                            $codlibroL = $_POST['txtCodLibroL'];
                            $tituloL = $_POST ['txtTituloL'];
                            $editorialL = $_POST ['txtEditorialL'];
                            $anioL = $_POST ['txtAnioL'];

                            if(isset($_POST['btnAgregarL']))
                            {
                                $consultaL = "insert into tlibro values('".$codlibroL."','".$tituloL."','".$editorialL."','".$anioL."')";
                                $resultadoL = mysqli_query($linkL, $consultaL);
                                if($resultadoL) echo "<script>alert('Se agrego correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if (isset($_POST['btnEliminarL']))
                            {
                                $consultaL = "delete from tlibro where codlibro = '".$codlibroL."'";
                                $resultadoL = mysqli_query($linkL, $consultaL);
                                if($resultadoL) echo "<script>alert('Se elimino correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnActualizarL']))
                            {
                                $actualizarL ="update tlibro set titulo='$tituloL',editorial='$editorialL',anio='$anioL' where codlibro='$codlibroL'";
                                $resultadoL=mysqli_query($linkL,$actualizarL);
                                if($resultadoL) echo "<script>alert('se actualizo');</script>";
                            }

                            else if(isset($_POST['btnBuscarL']))
                            {
                                $consultaL = "select titulo, editorial, anio from tlibro where codlibro = '$codlibroL'";
                                $resultadoL = mysqli_query($linkL, $consultaL);
                                if($resultadoL)
                                {
                                    ?>
                                    <table>
                                        <thead>
                                            <th>Titulo</th>
                                            <th>Editorial</th>
                                            <th>Año</th>
                                        </thead>
                                        <?php
                                        while($rowL = mysqli_fetch_array($resultadoL))
                                        {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $rowL["titulo"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $rowL["editorial"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $rowL["anio"];
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    <?php
                                }
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnListarL']))
                            {
                                $consultaL = "select * from tlibro";
                                $resultadoL = mysqli_query($linkL, $consultaL);
                            }

                            // Tabla Prestamo
                            $codautorP = $_POST['txtCodAutorP'];
                            $codlibroP = $_POST ['txtCodLibroP'];
                            $fechaprestamoP = $_POST ['txtFechaPrestamoP'];
                            $fechadevolucionP = $_POST ['txtFechaDevolucionP'];

                            if(isset($_POST['btnAgregarP']))
                            {
                                $consultaP = "insert into tprestamo values('".$codautorP."','".$codlibroP."','".$fechaprestamoP."','".$fechadevolucionP."')";
                                $resultadoP = mysqli_query($linkP, $consultaP);
                                if($resultadoP) echo "<script>alert('Se agrego correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if (isset($_POST['btnEliminarP']))
                            {
                                $consultaP = "delete from tprestamo where codautor = '".$codautorP."'";
                                $resultadoP = mysqli_query($linkP, $consultaP);
                                if($resultadoP) echo "<script>alert('Se elimino correctamente');</script>";
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnActualizarP']))
                            {
                                $actualizarP ="update tprestamo set codlibro='$codlibroP',fechaprestamo='$fechaprestamoP',fechadevolucion='$fechadevolucionP' where codautor='$codautorP'";
                                $resultadoP=mysqli_query($linkP,$actualizarP);
                                if($resultadoP) echo "<script>alert('se actualizo');</script>";
                            }

                            else if(isset($_POST['btnBuscarP']))
                            {
                                $consultaP = "select codautor, codlibro, fechaprestamo, fechadevolucion from tprestamo where codautor = '$codautorP'";
                                $resultadoP = mysqli_query($linkP, $consultaP);
                                if($resultadoP)
                                {
                                    ?>
                                    <table>
                                        <thead>
                                            <th>CodAutor</th>
                                            <th>CodLibro</th>
                                            <th>Fecha Prestamo</th>
                                            <th>Fecha Devolucion</th>
                                        </thead>
                                        <?php
                                            while($rowP = mysqli_fetch_array($resultadoP))
                                            {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $rowP["codautor"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowP["codlibro"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowP["fechaprestamo"];
                                                echo "</td>";
                                                echo "<td>";
                                                echo $rowP["fechadevolucion"];
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </table>
                                    <?php
                                }
                                else echo "<script>alert('Error');</script>";
                            }

                            else if(isset($_POST['btnListarP']))
                            {
                                $consultaP = "select * from tprestamo";
                                $resultadoP = mysqli_query($linkP, $consultaP);
                            }
                        }
                    ?>
                    <form action="#" method="POST">
                        <div>
                            <!--Tabla Autor-->
                            <h3 style="color: blue;">
                                Tabla Autor
                            </h3>
                            <p>CodAutor: <input type="text" name="txtCodAutorA"></p>
                            <p>Apellidos: <input type="text" name="txtApellidosA"></p>
                            <p>Nombres: <input type="text" name="txtNombresA"></p>
                            <p>Nacionalidad: <input type="text" name="txtNacionalidadA"></p>
                            <p>Profesion: <input type="text" name="txtProfesionA"></p>
                            <p>
                                <input type="submit" name="btnAgregarA" value="Agregar">
                                <input type="submit" name="btnEliminarA" value="Eliminar">
                                <input type="submit" name="btnActualizarA" value="Actualizar">
                                <input type="submit" name="btnBuscarA" value="Buscar">
                                <input type="submit" name="btnListarA" value="Listar">
                            </p>
                            <table>
                                <thead>
                                    <th>CodAutor</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Nacionalidad</th>
                                    <th>Profesion</th>
                                </thead>
                                <?php
                                    $consultaA = "SELECT * FROM tautor";
                                    $resultadoA = mysqli_query($linkA,$consultaA);
                                    while($rowA = mysqli_fetch_array($resultadoA))
                                    {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $rowA["codautor"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowA["apellidos"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowA["nombres"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowA["nacionalidad"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowA["profesion"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    mysqli_free_result($resultadoA);
                                    mysqli_close($linkA);
                                ?>
                            </table>
                        </div>
                        <div>
                            <!--Tabla Libro-->
                            <h3 style="color: blue;">
                                Tabla Libro
                            </h3>
                            <p>CodLibro: <input type="text" name="txtCodLibroL"></p>
                            <p>Titulo: <input type="text" name="txtTituloL"></p>
                            <p>Editorial: <input type="text" name="txtEditorialL"></p>
                            <p>Año: <input type="text" name="txtAnioL"></p>
                            <p>
                                <input type="submit" name="btnAgregarL" value="Agregar">
                                <input type="submit" name="btnEliminarL" value="Eliminar">
                                <input type="submit" name="btnActualizarL" value="Actualizar">
                                <input type="submit" name="btnBuscarL" value="Buscar">
                                <input type="submit" name="btnListarL" value="Listar">
                            </p>
                            <table>
                                <thead>
                                    <th>CodLibro</th>
                                    <th>Titulo</th>
                                    <th>Editorial</th>
                                    <th>Año</th>
                                </thead>
                                <?php
                                    $consultaL = "SELECT * FROM tlibro";
                                    $resultadoL = mysqli_query($linkL,$consultaL);
                                    while($rowL = mysqli_fetch_array($resultadoL))
                                    {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $rowL["codlibro"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowL["titulo"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowL["editorial"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowL["anio"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    mysqli_free_result($resultadoL);
                                    mysqli_close($linkL);
                                ?>
                            </table>
                        </div>
                        <div>
                            <!--Tabla Prestamo-->
                            <h3 style="color: blue;">
                                Tabla Prestamo
                            </h3>
                            <p>CodAutor: <input type="text" name="txtCodAutorP"></p>
                            <p>CodLibro: <input type="text" name="txtCodLibroP"></p>
                            <p>Fecha Prestamo: <input type="text" name="txtFechaPrestamoP"></p>
                            <p>Fecha Devolucion: <input type="text" name="txtFechaDevolucionP"></p>
                            <p>
                                <input type="submit" name="btnAgregarP" value="Agregar">
                                <input type="submit" name="btnEliminarP" value="Eliminar">
                                <input type="submit" name="btnActualizarP" value="Actualizar">
                                <input type="submit" name="btnBuscarP" value="Buscar">
                                <input type="submit" name="btnListarP" value="Listar">
                            </p>
                            <table>
                                <thead>
                                    <th>CodAutor</th>
                                    <th>CodLibro</th>
                                    <th>Fecha Prestamo</th>
                                    <th>Fecha Devolucion</th>
                                </thead>
                                <?php
                                    $consultaP = "SELECT * FROM tprestamo";
                                    $resultadoP = mysqli_query($linkP,$consultaP);
                                    while($rowP = mysqli_fetch_array($resultadoP))
                                    {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $rowP["codautor"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowP["codlibro"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowP["fechaprestamo"];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $rowP["fechadevolucion"];
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    mysqli_free_result($resultadoP);
                                    mysqli_close($linkP);
                                ?>
                            </table>
                        </div>
                    </form>
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

        <style>
            table {
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 18px;
                margin: 45px;
                width: 600px;
                text-align: left;
                border-collapse: collapse;
            }

            th {
                font-size: 20px;
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

            h3{
                font-family: "Times New Roman";
                font-size: 40px;
            }

            input{
                border: 1px dotted #999;
                border-radius: 0;
                -webkit-appearance: none;
                border-radius: 5px;
            }
        </style>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>