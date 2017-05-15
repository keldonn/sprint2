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
				<li class="active">Carrito</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				Carrito
			</h2>
		<!-- Main Heading Ends -->
		<!-- Shopping Cart Table Starts -->
			<div class="table-responsive shopping-cart-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">
								Imagen
							</td>
							<td class="text-center">
								Detalles del producto
							</td>
							<td class="text-center">
								Cantidad
							</td>
							<td class="text-center">
								Precio
							</td>
							<td class="text-center">
								Total
							</td>
							<td class="text-center">
								Acción
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">
								<a href="product.php">
									<img src="images/kronos-product-images/pimg2.png" alt="Producto" title="Producto" class="img-thumbnail" height="90px" width="137px" />
								</a>
							</td>
							<td class="text-center">
								<a href="product-full.php">Han Solo Funda</a>
							</td>
							<td class="text-center">
								<div class="input-group btn-block">
									<input type="text" name="quantity" value="1" size="1" class="form-control" />
								</div>
							</td>
							<td class="text-center">
								$150
							</td>
							<td class="text-center">
								$150
							</td>
							<td class="text-center">
								<button type="submit" title="Update" class="btn btn-default tool-tip">
									<i class="fa fa-refresh"></i>
								</button>
								<button type="button" title="Remove" class="btn btn-default tool-tip">
									<i class="fa fa-times-circle"></i>
								</button>
							</td>
						</tr>
						<tr>
							<td class="text-center">
								<a href="product.php">
									<img src="images/kronos-product-images/pimg6.png" alt="Producto" title="Producto" class="img-thumbnail" height="90px" width="137px" />
								</a>
							</td>
							<td class="text-center">
								<a href="product-full.html">Ghostbusters, El Libro</a>
							</td>
							<td class="text-center">
								<div class="input-group btn-block">
									<input type="text" name="quantity" value="1" size="1" class="form-control" />
								</div>
							</td>
							<td class="text-center">
								$450
							</td>
							<td class="text-center">
								$450
							</td>
							<td class="text-center">
								<button type="submit" title="Update" class="btn btn-default tool-tip">
									<i class="fa fa-refresh"></i>
								</button>
								<button type="button" title="Remove" class="btn btn-default tool-tip">
									<i class="fa fa-times-circle"></i>
								</button>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
						  <td colspan="4" class="text-right">
							<strong>Total :</strong>
						  </td>
						  <td colspan="2" class="text-left">
							$600
						  </td>
						</tr>
					</tfoot>
				</table>
			</div>
		<!-- Shopping Cart Table Ends -->
		<!-- Shipping Section Starts -->
			<section class="registration-area">
				<div class="row">
				<!-- Shipping & Shipment Block Starts -->
					<div class="col-sm-6">
					<!-- Taxes Block Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Envíos
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">País :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputCountry">
												<option>- Todos los países -</option>
												<option>Argentina</option>
												<option>USA</option>
												<option>Francia</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">Region :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputRegion">
												<option>- Todas las regiones -</option>
												<option>- CABA -</option>
												<option>- Provincia -</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputZipCode" class="col-sm-3 control-label">Codigo Postal :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputZipCode" placeholder="Zip Code">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-default">
												Obtener información
											</button>
										</div>
									</div>
								</form>
							<!-- Form Ends -->
							</div>
						</div>
					<!-- Taxes Block Ends -->
					<!-- Shipment Information Block Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Información de envíos
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Nombre :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputFname" placeholder="Nombre">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">Apellido :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputLname" placeholder="Apellido">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">Email :</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Teléfono :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPhone" placeholder="Teléfono">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Dirección/1 :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputAddress1" placeholder="Dirección/1">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Dirección/2 :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputAddress2" placeholder="Dirección/2">
										</div>
									</div>
									<div class="form-group">
										<label for="inputCity" class="col-sm-3 control-label">Ciudad :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Código Postal :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputPostCode" placeholder="Código Postal">
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Pais :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputCountry1">
												<option>- Todos los países -</option>
												<option>Argentina</option>
												<option>USA</option>
												<option>Francia</option>
												<option>China</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRegion" class="col-sm-3 control-label">Region :</label>
										<div class="col-sm-9">
											<select class="form-control" id="inputRegion1">
												<option>- Todas las regiones -</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-warning">
												Enviar!
											</button>
										</div>
									</div>
								</form>
							<!-- Form Ends -->
							</div>
						</div>
					<!-- Shipment Information Block Ends -->
					</div>
				<!-- Shipping & Shipment Block Ends -->
				<!-- Discount & Conditions Blocks Starts -->
					<div class="col-sm-6">
					<!-- Discount Coupon Block Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Cupón de descuento
								</h3>
							</div>
							<div class="panel-body">
							<!-- Form Starts -->
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputCouponCode" class="col-sm-3 control-label">Código de cupón :</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputCouponCode" placeholder="Cupon">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-default">
												Aplicar cupón
											</button>
										</div>
									</div>
								</form>
							<!-- Form Ends -->
							</div>
						</div>
					<!-- Discount Coupon Block Ends -->
					<!-- Conditions Panel Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Términos &amp; Condiciones
								</h3>
							</div>
							<div class="panel-body">
								<p>
									HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.
								</p>
								<p>
									Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi.
								</p>
								<p>
									Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat.
								</p>
							</div>
						</div>
					<!-- Conditions Panel Ends -->
					<!-- Total Panel Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Total
								</h3>
							</div>
							<div class="panel-body">
								<dl class="dl-horizontal">
									<dt>Descuento de cupón :</dt>
									<dd>$-25.00</dd>
									<dt>Subtotal :</dt>
									<dd>$300.00</dd>
									<dt>Costo de envío :</dt>
									<dd>$15.00</dd>
									<dt>Total :</dt>
									<dd>$315.00</dd>
								</dl>
								<hr />
								<dl class="dl-horizontal total">
									<dt>Total :</dt>
									<dd>$325.00</dd>
								</dl>
								<hr />
								<div class="text-uppercase clearfix">
									<a href="#" class="btn btn-default pull-left">
										<span class="hidden-xs">Continuar comprando</span>
										<span class="visible-xs">Continuar</span>
									</a>
									<a href="#" class="btn btn-default pull-right">
										Caja
									</a>
								</div>
							</div>
						</div>
					<!-- Total Panel Ends -->
					</div>
				<!-- Discount & Conditions Blocks Ends -->
				</div>
			</section>
		<!-- Shipping Section Ends -->
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
