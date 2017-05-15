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


	<!-- Slider Section Starts -->
		<div class="slider">
			<div class="container">
				<div id="main-carousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper For Slides Starts -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/kronos-product-images/Slideshow01.png" alt="Slider" class="img-responsive" />
							</div>
							<div class="item">
								<img src="images/kronos-product-images/Slideshow02.png" alt="Slider" class="img-responsive" />
							</div>
						</div>
					<!-- Wrapper For Slides Ends -->
					<!-- Controls Starts -->
						<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					<!-- Controls Ends -->
				</div>
			</div>
		</div>
	<!-- Slider Section Ends -->
	<!-- 3 Column Banners Starts -->
		<div class="col3-banners">
			<div class="container">
				<ul class="row list-unstyled">
					<li class="col-sm-4">
						<img src="images/kronos-banners/banner01.png" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-4">
						<img src="images/kronos-banners/banner02.png" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-4">
						<img src="images/kronos-banners/banner03.png" alt="banners" class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	<!-- 3 Column Banners Ends -->
	<!-- Latest Products Starts -->
		<section class="products-list">
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">Novedades</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg1.png" alt="producto" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.php">Sunnydale High Hoodie</a></h4>
								<div class="description">
									Sentite parte de la Boca del Infierno con tu buzo de Sunnydale High! Especial Buffy 20 Aniversario
								</div>
								<div class="price">
									<span class="price-new">$250</span>
									<span class="price-old">$500</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg2.png" alt="producto" class="img-responsive" />
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
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg3.png" alt="producto" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.php">Cartuchera Rick Sanchez</a></h4>
								<div class="description">
									"Wubba Lubba Dub Dub" Cartuchera para guardar lo que quieras! Especial Rick and Morty segunda temporada
								</div>
								<div class="price">
									<span class="price-new">$150</span>
									<span class="price-old">$250</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
				<!-- Product #4 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg4.png" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.php">Gorra Marty McFly</a></h4>
								<div class="description">
									"¡Tenga cuidado Doc, no le vaya a caer un rayo!"
									Gorra Marty McFly, el último grito de la moda de los 80s
								</div>
								<div class="price">
									<span class="price-new">$200</span>
									<span class="price-old">$400</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
				<!-- Product #4 Ends -->
				</div>
			<!-- Products Row Ends -->
			</div>
		</section>
	<!-- Latest Products Ends -->
	<!-- 2 Column Banners Starts -->
		<div class="col2-banners">
			<div class="container">
				<ul class="row list-unstyled">
					<li class="col-sm-4">
						<img src="images/kronos-banners/banner04.png" alt="banners" class="img-responsive" />
					</li>
					<li class="col-sm-8">
						<img src="images/kronos-banners/banner05.png" alt="banners" class="img-responsive" />
					</li>
				</ul>
			</div>
		</div>
	<!-- 2 Column Banners Ends -->
	<!-- Specials Products Starts -->
		<section class="products-list">
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">Productos Especiales</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg6.png" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4>
									<a href="product-full.php">Ghostbusters, El Libro</a>
								</h4>
								<div class="description">
									Aprendé todo sobre Ghostbusters en esta nueva e inédita edición de su libro, con todos los lujos y detalles!
								</div>
								<div class="price">
									<span class="price-new">$450</span>
									<span class="price-old">$500</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg5.png" alt="producto" class="img-responsive" />
							</div>
							<div class="caption">
								<h4>
									<a href="product-full.php">Cama Totoro</a>
								</h4>
								<div class="description">
									Dormi plácidamente todas tus noches (válido para las siestas también) en esta cómoda cama inspirada en Totoro
								</div>
								<div class="price">
									<span class="price-new">$2500</span>
									<span class="price-old">$3200</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg7.png" alt="producto" class="img-responsive" />
							</div>
							<div class="caption">
								<h4>
									<a href="product-full.php">Joggins Batman</a>
								</h4>
								<div class="description">
									Unos cómodos pantalones de tela, para entrecasa o para dormir. No te los vas a querer sacar nunca!
								</div>
								<div class="price">
									<span class="price-new">$200</span>
									<span class="price-old">$250</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
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
				<!-- Product #4 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/kronos-product-images/pimg8.png" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4>
									<a href="product-full.php">Gizmo</a>
								</h4>
								<div class="description">
									Obten tu propio Gizmo! Chiquito y suavecito, Gizmo va a ser tu gran compañero de aventuras.
								</div>
								<div class="price">
									<span class="price-new">$130</span>
									<span class="price-old">$245</span>
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				<!-- Product #4 Ends -->
				</div>
			<!-- Products Row Ends -->
			</div>
		</section>
	<!-- Specials Products Ends -->


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
