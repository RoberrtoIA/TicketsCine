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

	<style>
		input {
			text-align: center;
		}

		.contenedor-tarjeta {
			margin-left: 10vh;
		}

		.card-pago {
			margin: 0;
			position: absolute;
			top: 35%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.pagare {
			margin-left: 10vh;
		}

		.pago-btn {
			margin-right: 8vh;
		}
	</style>

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
					<div class="w-550 mw-full card-pago">
						<!-- w-600 = width: 60rem (600px), mw-full = max-width: 100% -->
						<div class="card p-0">
							<br>

							<center>
								<h2 class="content-title">
									Boleto
								</h2>
							</center>
							<p class="pagare" id="pagareid">Monto a pagar: $</p>
							<?PHP
								// var_dump($_GET);
								// var_dump($_POST);
								$fecha = $_GET['fecha'];
								$funcion = $_GET['funcion'];
								$sala = $_GET['sala'];
								$pelicula = $_GET['pelicula'];
								$numero = $_POST['numero'];

								// echo $fecha . "<br>";
								// echo $funcion . "<br>";
								// echo $sala . "<br>";
								// echo $numero . "<br>";

								session_start();
								$_SESSION['fecha'] = $fecha;
								$_SESSION['funcion'] = $funcion;
								$_SESSION['sala'] = $sala;
								$_SESSION['pelicula'] = $pelicula;
								$_SESSION['numero'] = $numero;
							?>
							<div class="contenedor-tarjeta">
								<form action="recibo.php" method="post">
								<form action="enciar_correo.php" method="POST">
									<!-- First row -->
									<div class="form-row row-eq-spacing-sm">
										<div class="col-10">
											<label for="numero-tarjeta" class="required">Número de la Tarjeta</label>
											<input type="text" class="form-control" id="numero-tarjeta" placeholder="Número de Tarjeta" pattern="^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$">
										</div>
									</div>

									<!-- Second row container -->
									<div>
										<!-- Second row -->
										<div class="form-row row-eq-spacing">
											<div class="col-5">
												<label for="vigencia" class="required">Vigencia</label>
												<input type="text" class="form-control" id="vigencia" placeholder="Expiración (mm/aa)" pattern="[0-9]*" inputmode="numeric">
											</div>
											<div class="col-5">
												<label for="ccv" class="required">CCV</label>
												<input type="text" class="form-control" id="ccv" placeholder="CVV" pattern="[0-9]*" inputmode="numeric">
											</div>
										</div>
									</div>
									<!-- Third row -->
									<div class="form-row row-eq-spacing-md">
										<div class="col-md-10">
											<label for="email" class="required">Introduce tu correo electrónico</label>
											<input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico" required="required">
										</div>
									</div>

									<!-- Checkbox -->
									<div class="form-group">
										<div class="custom-checkbox">
											<input type="checkbox" id="terminos-condiciones" disabled checked>
											<label for="terminos-condiciones">Acepto <a class="hyperlink">Términos y Condiciones</a></label>
										</div>
									</div>
									<div class="text-center mt-20 mb-20">
										<!-- text-center = text-align: center, mt-20 = margin-top: 2rem (20px) -->
										<button class="btn btn-lg pago-btn" type="submit">Pago</button>
									</div>
								</form>
								</form>
							</div>
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