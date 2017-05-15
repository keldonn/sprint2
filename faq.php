<?php
session_start();
 ?>
 <!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Kronos</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS Files -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
	<link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
	<link rel="shortcut icon" href="images/fav.png">

</head>
<body>


<?php include 'header.php';?>


	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="index.php">Inicio</a></li>
				<li class="active">FAQ</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Product Info Starts -->
			<div class="row product-info full">
			<!-- Left Starts -->
				<div class="col-sm-4 images-block">
						<img src="images/faq1.png" alt="FAQ" class="img-responsive thumbnail" />
				</div>
			<!-- Left Ends -->
			<!-- Right Starts -->
				<div class="col-sm-8 product-details">

							<section>
								<div class="row">
										<div class="panel panel-smart">

											<div class="panel-heading">
												<h2 class="panel-title">PREGUNTAS FRECUENTES</h2>
											</div>
												<br>
											<h4>¿Qué es Kronos?</h4>
											<div class="panel-body">
												KRONOS presenta artículos únicos que no se consiguen en ninguna otra tienda del país. Podrás encontrar una amplia variedad de merchandising de tus películas y series favoritas.
											</div>
											<br>
											<h4>¿Cómo hago para comprar un producto?</h4>
											<div class="panel-body">
												Para comprar un producto es necesario que te registres en el sitio. Luego visita la amplia variedad de artículos de la tienda, y aprieta en "Comprar" cuando encuentres ese producto ideal para vos. Se agregará a tu carrito de compras, que podrás confirmar cuando desees.
											</div>
											<br>
											<h4>¿Cuándo me llega el producto?</h4>
											<div class="panel-body">
												Una vez procesado el pago, el producto se envía dentro de las 72 horas, y el plazo de envío no debería exceder de los 7 días.
											</div>
											<br>
											<h4>¿Qué hago si no me llegó el mail de confimación de compra?</h4>
											<div class="panel-body">
												Si no le llegó la confirmación de compra, revise su bandeja de correo no deseado (por error podría haber sido clasificado como tal). De no encontrarlo, póngase en contacto con el staff.
											</div>
											<br>
											<h4>¿Me devuelven el dinero si me arrepiento de la compra?</h4>
											<div class="panel-body">
												Si envía un mail cancelando la compra antes de las 6 horas de haberla realizado, nos comunicaremos con Ud. y le reembolsaremos el dinero.
											</div>

										</div>
									</div>
								</div>
							</section>



					<!-- Available Options Ends -->
					</div>
				</div>
			<!-- Right Ends -->
			</div>
		<!-- Product Info Ends -->

		</div>
	<!-- Main Container Ends -->


	<?php include 'footer.php';?>


	<!-- JavaScript Files -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
