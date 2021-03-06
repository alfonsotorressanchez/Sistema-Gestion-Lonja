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
                <a class="navbar-brand" href="Principal.php"><img src="../images/Aquabid.png" width="55px"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Principal.php">Home</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Captura.php">Captura</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Subastas.php">Subastas</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="SubastasExpress.php">Subastas Express</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="Cesta.php">Cesta</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item-principal active">
                            <a class="nav-link" href="InformacionCliente.php">Info</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="PerfilCliente.php">Perfil</a>
                        </li>
                        <li class="nav-item-principal">
                            <a class="nav-link" href="logout-cliente.php">Cerrar Sesión</a>
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
        <h2>Tutorial de uso:</h2>
        <br>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card1" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Registro de capturas
                </a>
            </h5>
            <div id="card1" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Mediante el registro de capturas, cualquier cliente de Aquabid será capaz de registrar una captura introduciendo los siguientes datos: <strong>barco, zona de captura, tipo de producto, peso, tamaño e imagen</strong> de la captura. Una registrada, la captura pasará a estado de revisión, donde un administrador la verificará para ponerla a la venta en una subasta.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card2" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Subastas normales
                </a>
            </h5>
            <div id="card2" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    Al acceder a esta funcionalidad, se mostrará un listado con todas las subastas que se realizarán proximamente. Si un cliente desea apuntarse a una subasta, únicamente tiene que hacer click sobre la misma, de tal modo que accederá a esta y se le enviará un correo de confirmación. Una vez la subasta comience, el cliente podrá adquirir el lote cuando este alcance el precio deseado, siempre y cuando no se alcance antes el precio mínimo u otro cliente se le adelante. Al adquirir el lote, el cliente recibirá un correo de confirmacion y el producto pasará a la cesta a la espera de ser pagado. En caso de que un lote llegue al precio mínimo sin que nadie lo compre, este pasará a subastarse 5 minutos mas tarde en una subasta express.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card3" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Subasta express
                </a>
            </h5>
            <div id="card3" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    A través de las subastas express se venderán los lotes descartados de las subastas normales, partiendo del precio mínimo en estas y reduciendo el precio hasta que un cliente adquiera el lote o hasta que llegue a cero el precio, en cuyo caso el lote se descartará. La forma de participar en este tipo de subastas es exactamente la misma que para las subastas normales y las notificaciones serán del mismo modo enviadas por correo.
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">
                <a class="collapsed d-block" data-toggle="collapse" href="#card7" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Cesta de la compra
                </a>
            </h5>
            <div id="card7" class="collapse" aria-labelledby="heading-collapsed">
                <div class="card-body">
                    La cesta de la compra mostrará a cada cliente un listado con todos los lotes obtenidos en subastas que se encuentran pendientes de pago, permitiendoles pagar cada uno individualmente y enviando un correo de confirmación cada vez que uno de los lotes es pagado.
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