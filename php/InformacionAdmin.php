<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página principal de Aquabid">
    <meta name="author" content="Miguel Ángel Pérez, Eric Romero, Alberto Sastre, Alfonso Torres">

    <title>Información</title>

    <link rel="shortcut icon" href="../images/Aquabid.png">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- JavaScript -->
    <script language="javascript" type="text/javascript" src="../js/Captura.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../css/lonja.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/RegistroCliente.css">


</head>

<body id="bprincipal ">
    <!-- Navigation -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top nnavbar">

            <div class="container">
                <a class="navbar-brand" href="principalAdmin.php"><img src="../images/Aquabid.png" width="55px"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item-principal ">
                            <a class="nav-link" href="principalAdmin.php">Home</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Revision.php">Revisión</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="RegistroAdmin.php">Registrar admin.</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item-principal">
                            <a class="nav-link active" href="InformacionAdmin.php">Información</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="PerfilAdmin.php" > Perfil</a>
                        </li>
                        <li class="nav-item-principal">
							<a class="nav-link" href="logout-admin.php">Cerrar Sesión</a>
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
        <h1 class="text-center">Información</h1>
        <h2>Tutorial de uso (administradores):</h2>
        <br>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card1" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Revisión de capturas
                </a>
            </h5>
            <div id="card1" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Mediante esta funcionalidad, un administrador podrá verificar si los datos de tamaño y peso de una captura introducida por un cliente son correctos antes de su puesta a la venta y, en caso contrario, podrá corregirlos. Durante la revisión, el administrador establecerá además un <strong>precio de partida</strong> y un <strong>precio mínimo</strong> para el lote, y una <strong>fecha</strong> para la subasta.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card2" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Registro de administrador
                </a>
            </h5>
            <div id="card2" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Al acceder a esta funcionalidad se mostrará un formulario para dar de alta a un nuevo administrador en la plataforma introduciendo los siguientes datos: <strong>nombre, apellidos, teléfono, correo electrónico y contraseña.</strong>
                </div>
            </div>
        </div>
        <br>
        <h2>FAQs:</h2>
        <br>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card4" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Usuarios
                </a>
            </h5>
            <div id="card4" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    En Aquabid existen dos tipos de usuarios: los clientes, que pueden registrar capturas para su venta y comprar lotes de otros clientes; y los administradores o supervisores, que son los encargados de verificar las capturas registradas por un cliente. Los dos tipos de usuarios tienen tipos distintos de cuentas con funcionalidades exclusivas.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card5" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Capturas y lotes
                </a>
            </h5>
            <div id="card5" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Una vez un cliente realice el registro de una captura en la web, esta pasará a estado de revisión hasta que un administrador la apruebe y le asigne un precio de partida, un precio mínimo y una fecha, momento a partir del cual los clientes podrán apuntarse accediendo a la subasta.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card6" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Descuentos
                </a>
            </h5>
            <div id="card6" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Aquabid ofrece a los clientes una serie de descuentos como programa de fidelidad. Cuando un cliente participe y compre en 1 subasta, recibirá tres descuentos que se aplicarán automáticamente en las tres primeras compras que realice un mes despues de esta. Estos descuentos serán del 15% para la primera, 10% para la segunda, y 5% para la tercera. Además, si un cliente participa y compra en cinco subastas el mismo día, se aplicará un descuento del 5% en su próxima compra.
                </div>
            </div>
        </div>
        <br>
        <h2>Sobre nosotros:</h2>
        <img id="logoAqBd" class="img-fluid mx-auto d-block" src="../images/Aquabid.png">
        <br>
        <p>AQUABID es una lonja online en la que podrá realizar la compraventa de lotes de productos del mar de una forma sencilla y accesible.</p>
        <p>Todos los derechos de autor pertenecen a:</p>
        <strong>Miguel Ángel Pérez Souza</strong><br>
        <strong>Eric Romero Andrés</strong><br>
        <strong>Alberto Sastre Gallardo</strong><br>
        <strong>Alfonso Torres Sánchez</strong>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="npadding bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Aquabid 2019</p>
        </div>
    </footer>
</body>

</html>