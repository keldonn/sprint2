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
				<li><a href="index.php">Home</a></li>
				<li class="active">Contacto</li>
			</ol>
		<!-- Breadcrumb Ends -->
		<!-- Main Heading Starts -->
			<h2 class="main-heading text-center">
				Envianos un mensaje
			</h2>
		<!-- Main Heading Ends -->
		<!-- Google Map Starts -->
			<br>
		<!-- Google Map Ends -->
		<!-- Starts -->
			<div class="row">
			<!-- Contact Details Starts -->
				<div class="col-sm-4">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Detalles de Contacto</h3>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled contact-details">
								<li class="clearfix">
									<i class="fa fa-home pull-left"></i>
									<span class="pull-left">
										My Company <br />
										1247 LB Nagar Road, Hyderabad, <br />
										Telangana - 500 035
									</span>
								</li>
								<li class="clearfix">
									<i class="fa fa-phone pull-left"></i>
									<span class="pull-left">
										91 99887 74455 <br />
										001 123 974 9856
									</span>
								</li>
								<li class="clearfix">
									<i class="fa fa-envelope-o pull-left"></i>
									<span class="pull-left">
										info@demolink.com <br />
										admin@demolink.com <br />
										support@demolink.com
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<!-- Contact Details Ends -->
			<!-- Contact Form Starts -->
				<div class="col-sm-8">
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Envianos un mail</h3>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">
										Name
									</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">
										Email
									</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject" class="col-sm-2 control-label">
										Subject
									</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">
										Message
									</label>
									<div class="col-sm-10">
										<textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-warning text-uppercase">		Submit
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			<!-- Contact Form Ends -->
			</div>
		<!-- Ends -->
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
