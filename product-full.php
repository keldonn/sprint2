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
				<li><a href="category-grid.php">Categoria</a></li>
				<li class="active">Netflix</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Product Info Starts -->
			<div class="row product-info full">
			<!-- Left Starts -->
				<div class="col-sm-4 images-block">
					<a href="images/product-images/big-pimg1.jpg">
						<img src="images/kronos-product-images/pimg-pag.png" alt="Image" class="img-responsive thumbnail" />
					</a>
					<ul class="list-unstyled list-inline">
						<li>
							<a href="">
								<img src="images/kronos-product-images/thumb1.png" alt="Image" class="img-responsive thumbnail" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="images/kronos-product-images/thumb2.png" alt="Image" class="img-responsive thumbnail" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="images/kronos-product-images/thumb3.png" alt="Image" class="img-responsive thumbnail" />
							</a>
						</li>
						<li>
							<a href="">
								<img src="images/kronos-product-images/thumb4.png" alt="Image" class="img-responsive thumbnail" />
							</a>
						</li>
					</ul>
				</div>
			<!-- Left Ends -->
			<!-- Right Starts -->
				<div class="col-sm-8 product-details">
					<div class="panel-smart">
					<!-- Product Name Starts -->
						<h2>CARTUCHERA RICK SANCHEZ</h2>
					<!-- Product Name Ends -->
						<hr />
					<!-- Manufacturer Starts -->
						<ul class="list-unstyled manufacturer">
							<li>
								<span>Tipo:</span> Accesorio
							</li>
							<li><span>Serie:</span> Rick and Morty</li>
							<li>
								<span>Disponibilidad:</span> <strong class="label label-danger">Fuera de Stock</strong>
							</li>
						</ul>
					<!-- Manufacturer Ends -->
						<hr />
					<!-- Price Starts -->
						<div class="price">
							<span class="price-head">Precio :</span>
							<span class="price-new">$150</span>
							<span class="price-old">$250</span>
						</div>
					<!-- Price Ends -->
						<hr />
					<!-- Available Options Starts -->
						<div class="options">
							<h3>Opciones de Disponibilidad</h3>
							<div class="form-group">
								<label for="select" class="control-label text-uppercase">Selecciona:</label>
								<select name="select" id="select" class="form-control">
									<option value="1" selected>Selecciona</option>
									<option value="2">Opcion 1</option>
									<option value="3">Opcion 1</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label text-uppercase">Radio:</label>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Loren ipsum
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Loren Ipsum
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-uppercase">Checkbox:</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Loren Ipsum
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" checked>
										Loren Ipsum
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label text-uppercase" for="input-quantity">Cantidad:</label>
								<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
							</div>
							<div class="cart-button button-group">
								<button type="button" title="Favoritos" class="btn btn-wishlist">
									<i class="fa fa-heart"></i>
								</button>
								<button type="button" title="Comparar" class="btn btn-compare">
									<i class="fa fa-bar-chart-o"></i>
								</button>
								<button type="button" class="btn btn-cart">
									Agregar
									<i class="fa fa-shopping-cart"></i>
								</button>
							</div>
						</div>
					<!-- Available Options Ends -->
					</div>
				</div>
			<!-- Right Ends -->
			</div>
		<!-- Product Info Ends -->
		<!-- Tabs Starts -->
			<div class="tabs-panel panel-smart">
			<!-- Nav Tabs Starts -->
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab-description">Descripción</a>
					</li>
					<li>
						<a href="#tab-specification">Especificación</a>
					</li>
					<li><a href="#tab-ainfo">Información Adicional</a></li>
					<li><a href="#tab-review">Reseña</a></li>
				</ul>
			<!-- Nav Tabs Ends -->
			<!-- Tab Content Starts -->
				<div class="tab-content clearfix">
				<!-- Description Starts -->
					<div class="tab-pane active" id="tab-description">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
						<p>
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
				<!-- Description Ends -->
				<!-- Specification Starts -->
					<div class="tab-pane" id="tab-specification">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<td colspan="2"><strong>Nombre</strong></td>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Nombre</td>
								<td>Alguna especificacion</td>
							  </tr>
							</tbody>
						</table>
						<table class="table table-bordered">
							<thead>
							  <tr>
								<td colspan="2"><strong>Nombre</strong></td>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>Nombre</td>
								<td>Otra especificacion</td>
							  </tr>
							</tbody>
						</table>
					</div>
				<!-- Specification Ends -->
				<!-- Additional Information Starts -->
					<div class="tab-pane" id="tab-ainfo">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
				<!-- Additional Information Ends -->
				<!-- Review Starts -->
					<div class="tab-pane" id="tab-review">
						<form class="form-horizontal">
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-name">Nombre</label>
								<div class="col-sm-10">
								<input type="text" name="name" value="" id="input-name" class="form-control" />
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-review">Opinión</label>
								<div class="col-sm-10">
									<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
									<div class="help-block">
										Algo que quieras opinar sobre el producto
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label ratings">Ratings</label>
								<div class="col-sm-10">
									Malo&nbsp;
									<input type="radio" name="rating" value="1" />
									&nbsp;
									<input type="radio" name="rating" value="2" />
									&nbsp;
									<input type="radio" name="rating" value="3" />
									&nbsp;
									<input type="radio" name="rating" value="4" />
									&nbsp;
									<input type="radio" name="rating" value="5" />
									&nbsp;Muy bueno
								</div>
							</div>
							<div class="buttons">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" id="button-review" class="btn btn-warning">
										Submit
									</button>
								</div>
							</div>
						</form>
					</div>
				<!-- Review Ends -->
				</div>
			<!-- Tab Content Ends -->
			</div>
		<!-- Tabs Ends -->
		<!-- Related Products Starts -->
					<div class="product-info-box">
						<h4 class="heading">Productos Relacionados</h4>
					<!-- Products Row Starts -->
						<div class="row">
						<!-- Product #1 Starts -->
							<div class="col-md-4 col-sm-6">
								<div class="product-col">
									<div class="image">
										<img src="images/kronos-product-images/pimg1.png" alt="product" class="img-responsive" />
									</div>
									<div class="caption">
										<h4><a href="product.php">SUNNYDALE HIGH HOODIE</a></h4>
										<div class="description">
											Sentite parte de la Boca del Infierno con tu buzo de Sunnydale High! Especial Buffy 20 Aniversario
										</div>
										<div class="price">
											<span class="price-new">$250</span>
											<span class="price-old">$500</span>
										</div>
										<div class="cart-button button-group">
											<button type="button" title="Favoritos" class="btn btn-wishlist">
												<i class="fa fa-heart"></i>
											</button>
											<button type="button" title="Comparar" class="btn btn-compare">
												<i class="fa fa-bar-chart-o"></i>
											</button>
											<button type="button" class="btn btn-cart">
												Agregar
												<i class="fa fa-shopping-cart"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						<!-- Product #1 Ends -->
						<!-- Product #2 Starts -->
							<div class="col-md-4 col-sm-6">
								<div class="product-col">
									<div class="image">
										<img src="images/kronos-product-images/pimg2.png" alt="product" class="img-responsive" />
									</div>
									<div class="caption">
										<h4><a href="product.php">Han Solo Funda</a></h4>
										<div class="description">
											Quién no quiere tener a Han Solo congelado en carbonita como funda de celular?
										</div>
										<div class="price">
											<span class="price-new">$150</span>
											<span class="price-old">$300</span>
										</div>
										<div class="cart-button button-group">
											<button type="button" title="Favoritos" class="btn btn-wishlist">
												<i class="fa fa-heart"></i>
											</button>
											<button type="button" title="Comparar" class="btn btn-compare">
												<i class="fa fa-bar-chart-o"></i>
											</button>
											<button type="button" class="btn btn-cart">
												Agregar
												<i class="fa fa-shopping-cart"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						<!-- Product #2 Ends -->
						<!-- Product #3 Starts -->
							<div class="col-md-4 col-sm-6">
								<div class="product-col">
									<div class="image">
										<img src="images/kronos-product-images/pimg4.png" alt="product" class="img-responsive" />
									</div>
									<div class="caption">
										<h4><a href="product.php">GORRA MARTY MCFLY</a></h4>
										<div class="description">
											"¡Tenga cuidado Doc, no le vaya a caer un rayo!" Gorra Marty McFly, el último grito de la moda de los 80s
										</div>
										<div class="price">
											<span class="price-new">$200</span>
											<span class="price-old">$400</span>
										</div>
										<div class="cart-button button-group">
											<button type="button" title="Favoritos" class="btn btn-wishlist">
												<i class="fa fa-heart"></i>
											</button>
											<button type="button" title="Comparar" class="btn btn-compare">
												<i class="fa fa-bar-chart-o"></i>
											</button>
											<button type="button" class="btn btn-cart">
												Agregar
												<i class="fa fa-shopping-cart"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						<!-- Product #3 Ends -->
				</div>
			<!-- Products Row Ends -->
			</div>
		<!-- Related Products Ends -->
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
