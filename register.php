<?php

session_start();

require_once("funciones.php");

if (isset($_SESSION["usuario"])) {
	header( "location:perfil.php" );
	exit();
}

	$uNombre = "";
	$uApellido = "";
	$uMail = "";
	$uTelefono = "";
	$uDireccion1 = "";
	$uDireccion2 = "";
	$uCiudad = "";
	$uCP = "";
	$uProvincia = "";
	$uUser = "";
	$pass = "";
	$cpass = "";
	$uCondiciones = "";

	if ($_POST)
	{
		$uNombre = $_POST["uNombre"];
		$uApellido = $_POST["uApellido"];
		$uMail = $_POST["uMail"];
		$uTelefono = $_POST["uTelefono"];
		$uDireccion1 = $_POST["uDireccion1"];
		$uDireccion2 = $_POST["uDireccion2"];
		$uCiudad = $_POST["uCiudad"];
		$uCP = $_POST["uCP"];
		$uProvincia = $_POST["uProvincia"];
		$uUser = $_POST["uUser"];
		$pass = $_POST["pass"];
		$cpass = $_POST["cpass"];

		//Acá vengo si me enviaron el form

		//Validar
		$errores = validacionUsuario($_POST);

		// Si no hay errores....
		if (empty($errores))
		{
			$usuario = crearUsuario($_POST);

			// Guardar al usuario en un JSON
			guardarUsuario($usuario);
			// Reenviarlo a la felicidad
		usuarioCreado();
		}
	}
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

	<title>Spice Shoppe Stores - Bootstrap 3 Template</title>

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
				<li><a href="index.php">Home</a></li>
				<li class="active">Registro</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				Registro de Usuario <br />
				<span>Crear una cuenta</span>
			</h2>

		<!-- Main Heading Ends -->
		<!-- Registration Section Starts -->
			<section class="registration-area">

				<div class="row">
					<div class="col-sm-6">
					<!-- Registration Block Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">

								<!-- Mostramos los errores -->
							<?php if (isset($errores) && !empty($errores)): ?>
							<h3>Houston, tenemos un problema!</h3>
							<ul>
								<?php foreach ($errores as $k => $v): ?>
								<?php echo "<li style='color:red'>" . $v . "</li>" ?>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
							<br>

								<h3 class="panel-title">Información Personal</h3>
							</div>
							<div class="panel-body">
							<!-- Registration Form Starts -->
								<form action="register.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form" >
								<!-- Personal Information Starts -->
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">(*) Nombre: </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uNombre" name="uNombre" placeholder="Nombre" <?=(isset($_POST['uNombre'])) ? 'value="' . $uNombre . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputLname" class="col-sm-3 control-label">(*) Apellido:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uApellido" name="uApellido" placeholder="Apellido" <?=(isset($_POST['uApellido'])) ? 'value="' . $uApellido . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-3 control-label">(*) Email:</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" id="uMail" name="uMail" placeholder="Email" <?=(isset($_POST['uMail'])) ? 'value="' . $uMail . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPhone" class="col-sm-3 control-label">Teléfono:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uTelefono" name="uTelefono" placeholder="Teléfono" <?=(isset($_POST['uTelefono'])) ? 'value="' . $uTelefono . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputFname" class="col-sm-3 control-label">Foto de perfil:</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="uFoto" name="uFoto" placeholder="Imagen">
										</div>
									</div>

								<!-- Personal Information Ends -->
									<h3 class="panel-heading inner">
										Domicilio de Entrega
									</h3>
								<!-- Delivery Information Starts -->

									<div class="form-group">
										<label for="inputAddress1" class="col-sm-3 control-label">Dirección/1:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uDireccion1" name="uDireccion1" placeholder="Direccion/1" <?=(isset($_POST['uDireccion1'])) ? 'value="' . $uDireccion1 . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress2" class="col-sm-3 control-label">Dirección/2:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uDireccion2" name="uDireccion2" placeholder="Direccion/2" <?=(isset($_POST['uDireccion2'])) ? 'value="' . $uDireccion2 . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCity" class="col-sm-3 control-label">Ciudad:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uCiudad" name="uCiudad" placeholder="Ciudad" <?=(isset($_POST['uCiudad'])) ? 'value="' . $uCiudad . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputPostCode" class="col-sm-3 control-label">Código Postal:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uCP" name="uCP" placeholder="CP" <?=(isset($_POST['uCP'])) ? 'value="' . $uCP . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCountry" class="col-sm-3 control-label">Provincia:</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="uProvincia" name="uProvincia" placeholder="Provincia" <?=(isset($_POST['uProvincia'])) ? 'value="' . $uProvincia . '"' : ''; ?>>
										</div>
									</div>
								<!-- Delivery Information Ends -->
									<h3 class="panel-heading inner">
										Contraseña
									</h3>
								<!-- Password Area Starts -->
								<div class="form-group">
									<label for="inputFname" class="col-sm-3 control-label">(*) Usuario: </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="uUser" name="uUser" placeholder="Usuario" <?=(isset($_POST['uUser'])) ? 'value="' . $uUser . '"' : ''; ?>>
									</div>
								</div>
									<div class="form-group">
										<label for="inputPassword" class="col-sm-3 control-label">(*) Contraseña:</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" <?=(isset($_POST['pass'])) ? 'value="' . $pass . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">
										<label for="inputRePassword" class="col-sm-3 control-label">(*) Confirma la Contraseña:</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" id="cpass" name="cpass" placeholder="Re-Password" <?=(isset($_POST['cpass'])) ? 'value="' . $cpass . '"' : ''; ?>>
										</div>
									</div>
									<div class="form-group">

										<div class="col-sm-9">

										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<div class="checkbox">
												<label>
													<input type="checkbox" id="uCondiciones" name="uCondiciones" checked> Acepto los términos y condiciones.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-warning">
												Registrarme
											</button>
										</div>
									</div>
								<!-- Password Area Ends -->
								</form>
							<!-- Registration Form Starts -->
							</div>
						</div>
					<!-- Registration Block Ends -->
					</div>
					<div class="col-sm-6">

					<!-- Conditions Panel Starts -->
						<div class="panel panel-smart">
							<div class="panel-heading">
								<h3 class="panel-title">
									Condiciones
								</h3>
							</div>
							<div class="panel-body">
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including  versions of Lorem Ipsum.
								</p>
								<ol>
								  <li>Lorem ipsum dolor sit amet</li>
								  <li>Consectetur adipiscing elit</li>
								  <li>Integer molestie lorem at massa</li>
								  <li>Facilisis in pretium nisl aliquet</li>
								  <li>Nulla volutpat aliquam velit</li>
								  <li>Faucibus porta lacus fringilla vel</li>
								  <li>Aenean sit amet erat nunc</li>
								  <li>Eget porttitor lorem</li>
								</ol>
								<p>
									HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.
								</p>
								<p>
									Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
								</p>
								<p>
									Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
								</p>
								<p>
									Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
								</p>
							</div>
						</div>
					<!-- Conditions Panel Ends -->
					</div>
				</div>
			</section>
		<!-- Registration Section Ends -->
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
