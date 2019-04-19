<?php

include_once 'Conexion.php';

if (isset($_POST['guardar'])) {

    $barco = mysqli_real_escape_string($con, $_POST['barco']);
    $zona_captura = mysqli_real_escape_string($con, $_POST['zona_captura']);
    $producto = mysqli_real_escape_string($con, $_POST['producto']);
    $peso = mysqli_real_escape_string($con, $_POST['peso']);
    $tamaño = mysqli_real_escape_string($con, $_POST['tamaño']);


    $sql = "INSERT INTO captura (barco, zona_captura, producto, peso, tamaño) VALUES('" . $barco . "', '" . $zona_captura . "', '" . $producto . "', '" . $peso . "', '" . $tamaño . "')";

    $sql = mysqli_query($con, $sql);
    $successmsg = '
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>EXITO.!</strong> Captura guardada exitosamente!
        </div>';
    echo $successmsg;
    header("Location:Captura.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página principal de Aquabid">
    <meta name="author" content="Miguel Ángel Pérez, Eric Romero, Alberto Sastre, Alfonso Torres">

    <title>AQUABID</title>

    <link rel="shortcut icon" href="../images/Aquabid.png">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- JavaScript -->
    <script language="javascript" type="text/javascript" src="../js/Captura.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link href="../css/lonja.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/RegistroCliente.css">


</head>

<body id="bprincipal ">
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top nnavbar">
            <div class="container">
                <a class="navbar-brand" href="Principal.php"><img src="../images/Aquabid.png" width="55px"></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item-principal ">
                            <a class="nav-link" href="Principal.php">Home</a>
                        </li>
                        <li class="nav-item-principal active">
                            <a class="nav-link" href="Captura.php">Captura</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Subastas.php">Subastas</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="SubastasExpress.php">Subastas Express</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Informacion.php">Información</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Perfil.php">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <br>
    <br>
    <div id="formularioCliente" class="shadow-lg container">
        <br>
        <h1 class="text-center">Captura</h1>
        <p id="aviso">
            <font color="red"><strong>TODOS</strong></font> los campos son obligatorios
        </p>
        <form name="captura" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Barco">Barco:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right"><img src="../images/barco.png" class="img-input-decorator"></div>
                        <input name="barco" class="form-control input-decorator-radius-left" placeholder="Barco" type="text">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Zona captura">Zona captura:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right"><img src="../images/location.png" class="img-input-decorator"></div>
                        <select name="zona_captura" class="form-control rounded-right">
                            <option disabled selected value> Zona captura </option>
                            <option>Cantábrico</option>
                            <option>Atlántico</option>
                            <option>Mediterráneo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-12">
                    <label for="Producto">Producto:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right"><img src="../images/pez.png" class="img-input-decorator"></div>
                        <input name="producto" class="form-control input-decorator-radius-left" placeholder="Producto" type="text">
                    </div>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-12">
                    <label for="Peso">Peso:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right">Kg</div>
                        <input name="peso" class="form-control input-decorator-radius-left" placeholder="Peso" type="text">
                    </div>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-12">
                    <label for="Tamaño">Tamaño:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right">cm</div>
                        <input name="tamaño" class="form-control input-decorator-radius-left" placeholder="Tamaño" type="text">
                    </div>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-12">
                    <label for="Tamaño">Imagen:</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text input-decorator-radius-right"><img src="../images/carpeta.png" class="img-input-decorator"></div>
                        <div class="custom-file">
                            <input type="file" class="form-control input-decorator-radius-left" id="imagen">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- BOTONES -->
        <div class="form-row">
            <div id="guardar" class="center form-boton submit-boton al-right" style="display: block;">
                <div class="form-group col-md-12">
                    <button name="guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="npadding bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Aquabid 2019</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>