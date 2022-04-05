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
    <title>Inicio</title>
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
            <form class="form-inline d-none d-md-flex ml-auto" action="" method="post">
                <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
                <input type="text" class="form-control" placeholder="Pelicula" required="required">
                <button class="btn" type="submit">Buscar</button>
            </form>
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
                    <div class="row row-eq-spacing-lg">
                        <div class="col-lg-9">
                            <?php
                            require_once __DIR__ . '../../../../Controlador/Index/readVerPelicula.php';
                            ?>
                            <!-- <nav aria-label="...">
                                <ul class="pagination text-center">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link w-100" tabindex="-1">Anterior.</a> 
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link" tabindex="-1">1</a>
                                    </li>
                                    <li class="page-item" aria-current="page"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item" aria-current="page"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link w-100">Siguiente</a> <
                                    </li>
                                </ul>
                            </nav> -->
                            <!-- <div class="card">
                                <h2 class="card-title">
                                    Batman
                                </h2>
                                <div class="row">
                                    <div class="col"> <img src="../../assets/Peliculas disponibles/1.jpg" width="45%" alt="Pelicula-Cartelera"> </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="badge">A</span>
                                                <span class="badge bg-dark text-white">1:20</span>
                                                <a href="#" class="badge badge-primary">Ver trailer</a>
                                            </div>

                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="#" class="badge">17:30</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                            <!-- <div class="fake-content"></div>
                            <div class="fake-content"></div>
                            <div class="fake-content"></div>

                            <div class="fake-content w-100"></div> -->
                            <!-- <div class="content">
                                <div class="fake-content"></div>
                                <div class="fake-content w-150"></div>
                            </div> -->
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="content">
                                <h2 class="content-title font-size-20">
                                    Sucursales
                                </h2>
                                <div class="fake-content"></div>
                                <div class="fake-content"></div>
                                <div class="fake-content"></div>
                                <div class="fake-content"></div>
                                <div class="fake-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/halfmoon-1.1.1/js/halfmoon.min.js"></script>
    <!-- <script src="../../assets/js/admin.js"></script> -->
</body>

</html>