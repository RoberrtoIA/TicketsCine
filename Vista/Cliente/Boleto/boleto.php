<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!-- Halfmoon CSS -->
    <link href="../../assets/halfmoon-1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.1.0-web/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/img/entrada-de-cine.png">
    <link rel="stylesheet" href="../../assets/css/cliente.css">
    <title>Boleto</title>
</head>

<body>

    <!-- Page wrapper with .with-navbar class -->
    <div class="page-wrapper with-navbar">
        <!-- Navbar (immediate child of the page wrapper) -->
        <nav class="navbar">
            <!-- Navbar brand -->
            <a href="/Vista/Cliente/Index/index.php" class="navbar-brand">
                <img src="/Vista/assets/img/entrada-de-cine.png" alt="Logo">
                Cinema
            </a>
            <!-- Navbar text -->
            <span class="navbar-text text-monospace">La Gran Via</span> <!-- text-monospace = font-family shifted to monospace -->
            <!-- Navbar nav -->
            <ul class="navbar-nav d-none d-md-flex">
                <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
                <li class="nav-item">
                    <a href="#" class="nav-link">Estrenos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Proximamente</a>
                </li>
            </ul>
            <!-- Navbar form (inline form) -->
            <!-- <form class="form-inline d-none d-md-flex ml-auto" action="..." method="...">
                <input type="text" class="form-control" placeholder="Pelicula" required="required">
                <button class="btn" type="submit">Buscar</button>
            </form> -->
            <!-- Navbar content (with the dropdown menu) -->
            <div class="navbar-content d-md-none ml-auto">
                <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
                <div class="dropdown with-arrow">
                    <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
                        Menu
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1">
                        <!-- w-200 = width: 20rem (200px) -->
                        <a href="#" class="dropdown-item">Docs</a>
                        <a href="#" class="dropdown-item">Products</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-content">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pelicula" required="required">
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container">
                <div class="container-fluid">
                    <?php
                    // var_dump($_GET)
                    ?>
                    
                    <center>
                    <div class="w-550 mw-full">
                            <!-- w-600 = width: 60rem (600px), mw-full = max-width: 100% -->
                            <div class="card p-0">
                                <br>
                                <h2 class="content-title">
                                    Boleto
                                </h2>
                                <!-- p-0 = padding: 0 -->
                                <img src="../../movies/<?php echo $_GET['img'] ?>" class="img-fluid rounded-top titulo-pelicula" width="65%" alt="Pelicula"> <!-- rounded-top = rounded corners on the top -->
                                <!-- First content container nested inside card -->
                                <form action="../Pago/pago.php?fecha=<?php echo $_GET['fecha']; ?>&funcion=<?php echo $_GET['funcion']; ?>&sala=<?php echo $_GET['sala'] ?>" method="post">
                                    <div class="content">
                                        <h2 class="content-title">
                                            <?php echo $_GET['pelicula'] ?>
                                        </h2>
                                        <div>
                                            <span class="text-muted">
                                                <i class="fa fa-clock-o mr-5" aria-hidden="true"></i> <?php echo $_GET['fecha'] ?>
                                                <!-- mr-5 = margin-right: 0.5rem (5px) -->
                                            </span>
                                        </div>
                                        <div>
                                            <span class="badge">
                                                <i class="fa fa-solid fa-clock text-primary mr-5" aria-hidden="true"></i> <?php echo $_GET['funcion'] ?>
                                                <!-- text-primary = color: primary-color, mr-5 = margin-right: 0.5rem (5px) -->
                                            </span>
                                            <span class="badge ml-5">
                                                <!-- ml-5 = margin-left: 0.5rem (5px) -->
                                                <i class="fa fa-solid fa-hourglass-empty text-danger mr-5" aria-hidden="true"></i> <?php echo $_GET['duracion'] ?>
                                                <!-- text-danger = color: danger-color, mr-5 = margin-right: 0.5rem (5px) -->
                                            </span>
                                        </div>
                                    </div>
                                    <hr />
                                    <!-- Second content container nested inside card (comments) -->
                                    <div class="content">
                                        <div>
                                            <strong>Asientos ($4.50 c/u)</strong>
                                            <br />
                                            <div class="input-group w-100">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">#</span>
                                                </div>
                                                <input type="number" min="1" max="10" class="form-control" name="numero" placeholder="Ingrese un numero" required>
                                            </div>
                                        </div>
                                        <hr />
                                        <div>
                                            <strong>Teatro</strong>
                                            <br />
                                            <?php echo $_GET['sala'] ?>.
                                        </div>
                                        <hr />
                                        <!-- <div>
                                            <strong>James Bucks</strong>
                                            <br />
                                            This is just pretentious enough for my tastes. I love it.
                                        </div> -->
                                        <div class="text-center mt-20">
                                            <!-- text-center = text-align: center, mt-20 = margin-top: 2rem (20px) -->
                                            <button class="btn" type="submit">Pago</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/halfmoon-1.1.1/js/halfmoon.min.js"></script>
    <!-- <script src="../../assets/js/admin.js"></script> -->
</body>

</html>