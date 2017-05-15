
<!-- Header Section Starts -->
		<header id="header-area">
		<!-- Header Top Starts -->
			<div class="header-top">
				<div class="container">
					<!-- Header Links Starts -->
						<div class="col-sm-8 col-xs-12">
							<div class="header-links">
								<ul class="nav navbar-nav pull-left">
									<li>
										<a href="index.php">
											<i class="fa fa-home" title="Inicio"></i>
											<span class="hidden-sm hidden-xs">
												Inicio
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-heart" title="Favoritos"></i>
											<span class="hidden-sm hidden-xs">
												Favoritos
											</span>
										</a>
									</li>
									<li>
										<a href="cart.php">
											<i class="fa fa-shopping-cart" title="Carrito"></i>
											<span class="hidden-sm hidden-xs">
												Carrito
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-crosshairs" title="Comprar"></i>
											<span class="hidden-sm hidden-xs">
												Comprar
											</span>
										</a>
									</li>

<?php if (!isset($_SESSION["usuario"])): ?>
	<li>
		<a href="register.php">
			<i class="fa fa-unlock" title="Registrar"></i>
			<span class="hidden-sm hidden-xs">
				Registrate
			</span>
		</a>
	</li>
	<li>
		<a href="login.php">
			<i class="fa fa-lock" title="Inicia Sesion"></i>
			<span class="hidden-sm hidden-xs">
				Inicia Sesion
			</span>
		</a>
	</li>
<?php endif; ?>

<?php if (isset($_SESSION["usuario"])): ?>
<li>
	<a href="perfil.php">
		<i class="fa fa-user" title="Mi cuenta"></i>
		<span class="hidden-sm hidden-xs">
			Mi cuenta
		</span>
	</a>
</li>
<li>
	<a href="salir.php">
		<i class="fa fa-unlock" title="Salir"></i>
		<span class="hidden-sm hidden-xs">
			Salir
		</span>
	</a>
</li>
<li>
	<a href="perfil.php">
		<span class="hidden-sm hidden-xs">
			<?=(isset($_SESSION["usuario"])) ? '¡Bienvenido ' . $_SESSION["usuario"] . '!': ''; ?>
		</span>
			</a>
</li>
<?php endif; ?>


								</ul>
							</div>
						</div>
					<!-- Header Links Ends -->
					<!-- Currency & Languages Starts -->
						<div class="col-sm-4 col-xs-12">
							<div class="pull-right">
							<!-- Currency Starts -->
								<div class="btn-group">
									<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										Moneda
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="pull-right dropdown-menu">
										<li><a tabindex="-1" href="#">Pesos Argentinos</a></li>
										<li><a tabindex="-1" href="#"> Dolares</a></li>
										<li><a tabindex="-1" href="#">Euros</a></li>
									</ul>
								</div>
							<!-- Currency Ends -->
							<!-- Languages Starts -->
								<div class="btn-group">
									<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										Lenguaje
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="pull-right dropdown-menu">
										<li>
											<a tabindex="-1" href="#">Inglés</a>
										</li>
										<li>
											<a tabindex="-1" href="#">Francés</a>
										</li>
										<li>
											<a tabindex="-1" href="#">Español</a>
										</li>
									</ul>
								</div>
							<!-- Languages Ends -->
							</div>
						</div>
					<!-- Currency & Languages Ends -->
				</div>
			</div>
		<!-- Header Top Ends -->
		<!-- Starts -->
			<div class="container">
			<!-- Main Header Starts -->
				<div class="main-header">
					<div class="row">
					<!-- Logo Starts -->
						<div class="col-md-6">
							<div id="logo">
								<a href="index.php"><img src="images/kronos_logo.png" title="Kronos" alt="Kronos logo" class="img-responsive" /></a>
							</div>
						</div>
					<!-- Logo Starts -->
					<!-- Search Starts -->
						<div class="col-md-3">
							<div id="search">
								<div class="input-group">
								  <input type="text" class="form-control input-lg" placeholder="Buscar">
								  <span class="input-group-btn">
									<button class="btn btn-lg" type="button">
										<i class="fa fa-search"></i>
									</button>
								  </span>
								</div>
							</div>
						</div>
					<!-- Search Ends -->
					<!-- Shopping Cart Starts -->
						<div class="col-md-3">
							<div id="cart" class="btn-group btn-block">
								<button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
									<i class="fa fa-shopping-cart"></i>
									<span class="hidden-md">Carrito:</span>
									<span id="cart-total">2 item(s) - $640.00</span>
									<i class="fa fa-caret-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<table class="table table-striped hcart">
											<tr>
												<td class="text-center">
													<a href="product.php">
														<img src="images/kronos-product-images/billetera.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
													</a>
												</td>
												<td class="text-left">
													<a href="product-full.php">
														Billetera Pulp Fiction
													</a>
												</td>
												<td class="text-right">x 1</td>
												<td class="text-right">$400</td>
												<td class="text-center">
													<a href="#">
														<i class="fa fa-times"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													<a href="product.php">
														<img src="images/kronos-product-images/taza.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
													</a>
												</td>
												<td class="text-left">
													<a href="product-full.php">
														Taza Stranger Things
													</a>
												</td>
												<td class="text-right">x 2</td>
												<td class="text-right">$240</td>
												<td class="text-center">
													<a href="#">
														<i class="fa fa-times"></i>
													</a>
												</td>
											</tr>
										</table>
									</li>
									<li>
										<table class="table table-bordered total">
											<tbody>
												<tr>
													<td class="text-right"><strong>Sub-Total</strong></td>
													<td class="text-left">$640</td>
												</tr>

												<tr>
													<td class="text-right"><strong>Costo de envío</strong></td>
													<td class="text-left">$100</td>
												</tr>
												<tr>
													<td class="text-right"><strong>Total</strong></td>
													<td class="text-left">$740</td>
												</tr>
											</tbody>
										</table>
										<p class="text-right btn-block1">
											<a href="cart.php">
												Ver Carrito
											</a>
											<a href="#">
												Comprar
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
					<!-- Shopping Cart Ends -->
					</div>
				</div>
			<!-- Main Header Ends -->
			<!-- Main Menu Starts -->
				<nav id="main-menu" class="navbar" role="navigation">
				<!-- Nav Header Starts -->
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<i class="fa fa-bars"></i>
						</button>
					</div>
				<!-- Nav Header Ends -->
				<!-- Navbar Cat collapse Starts -->
					<div class="collapse navbar-collapse navbar-cat-collapse">
						<ul class="nav navbar-nav">
							<li><a href="category-list.php">Novedades</a></li>
							<li class="dropdown">
								<a href="category-list.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
									Indumentaria
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1" href="#">Hombre</a></li>
									<li><a tabindex="-1" href="#">Mujer</a></li>
									<li><a tabindex="-1" href="#">Niños</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="category-list.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Categorías</a>
								<div class="dropdown-menu">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li class="dropdown-header">Películas</li>
											<li><a tabindex="-1" href="#">Antiguas</a></li>
											<li><a tabindex="-1" href="#">Modernas</a></li>
											<li><a tabindex="-1" href="#">Clásicos</a></li>
										</ul>
										<ul class="list-unstyled">
											<li class="dropdown-header">Series</li>
											<li><a tabindex="-1" href="#">Netflix</a></li>
											<li><a tabindex="-1" href="#">HBO</a></li>
											<li><a tabindex="-1" href="#">Otros</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="category-list.php">Accesorios</a></li>
							<li><a href="category-list.php">Libros</a></li>
							<li><a href="category-list.php">Colaboraciones</a></li>
							<li><a href="category-list.php">Ofertas</a></li>
						</ul>
					</div>
				<!-- Navbar Cat collapse Ends -->
				</nav>
			<!-- Main Menu Ends -->
			</div>
		<!-- Ends -->
		</header>
	<!-- Header Section Ends -->
