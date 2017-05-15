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
	<?php include 'header.php' ?>
		
	<!-- Header Section Ends -->
	<!-- Main Container Starts -->
		<div id="main-container" class="container">
		<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="index.html">Inicio</a></li>
				<li class="active">Comparar</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				Comparar Productos
			</h2>
		<!-- Main Heading Ends -->
		<!-- Compare Table Starts -->
			<div class="table-responsive compare-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Num</td>
							<td>Imagen</td>
							<td>Producto</td>
							<td>Precio</td>
							<td>Modelo</td>
							<td>Marca</td>
							<td>Disponibilidad</td>
							<td>Puntaje</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>
								<img src="images/kronos-product-images/thumb1.png" alt="image" title="image" class="img-thumbnail" />
							</td>
							<td class="name">
								<a href="product.php">Cartuchera 1</a>
							</td>							
							<td>
								 $120
							</td>
							<td>
								producto 
							</td>
							<td>
								Cartuchera 
							</td>
							<td>
								<span class="label label-success">En Stock</span>
							</td>
							<td class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
								<img src="images/kronos-product-images/thumb2.png" alt="image" title="image" class="img-thumbnail" />
							</td>
							<td class="name">
								<a href="product.php">Cartuchera 2</a>
							</td>							
							<td>
								 $150
							</td>
							<td>
								producto
							</td>
							<td>
								Cartuchera 
							</td>
							<td>
								<span class="label label-danger">Fuera de Stock</span>
							</td>
							<td class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>
								<img src="images/kronos-product-images/thumb3.png" alt="image" title="image" class="img-thumbnail" />
							</td>
							<td class="name">
								<a href="product.php">Cartuchera 3</a>
							</td>							
							<td>
								 $180
							</td>
							<td>
								producto
							</td>
							<td>
								Cartuchera 
							</td>
							<td>
								<span class="label label-success">En Stock</span>
							</td>
							<td class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		<!-- Compare Table Ends -->
		</div>
	<!-- Main Container Ends -->
		<!-- Footer Section Starts -->
		<?php include 'footer.php' ?>
	<!-- Footer Section Ends -->
	<!-- JavaScript Files -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>