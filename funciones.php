<?php

	function esUnaImagen($ext) {
		$ext = strtolower($ext);
		if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif') {
			return TRUE;
		}
		return FALSE;
	}

	function tienePesoValido($size) {
		$pesoMaximo = 300000;
		// 90 KB
		if ($size > $pesoMaximo) {
			return FALSE;
		}
		return TRUE;
	}

	function validacionUsuario($miUsuario)
	{
		$errores = [];

		if (trim($miUsuario["uNombre"]) == "") {
			$errores[] = "Ingresa tu nombre";
		}
		if (trim($miUsuario["uApellido"]) == "") {
			$errores[] = "Ingresa tu apellido";
		}
    if ($miUsuario["uMail"] == "") {
			$errores[] = "Ingresa tu mail";
		} else {
      if (!filter_var($miUsuario["uMail"], FILTER_VALIDATE_EMAIL)) {
  			$errores[] = "El mail no es válido";
  		}
  		if (existeElMail($miUsuario["uMail"]) && !isset($_SESSION["usuario"])) {
  			$errores[] = "Email ya registrado";
  			}
			}
		if (!empty($miUsuario["uTelefono"]) && !is_numeric($miUsuario["uTelefono"])) {
		  $errores[] = "El telefono ingresado no es valido";
	  }

		if (isset($_FILES["uFoto"])) {
			if ($_FILES["uFoto"]["error"] == UPLOAD_ERR_OK) {
				$nombre=$_FILES["uFoto"]["name"];
				$archivo=$_FILES["uFoto"]["tmp_name"];
				$ext = pathinfo($nombre, PATHINFO_EXTENSION);
					if (!esUnaImagen($ext) || !tienePesoValido($_FILES['uFoto']['size'])) {
						$errores[] = 'La imagen es muy pesada o no tiene un formato valido';
					}
				}
		}

// Comentamos esta parte para hacer que los campos sean opcionales.

/*
		if (trim($miUsuario["uDireccion1"]) == "") {
			$errores[] = "Ingresa una direccion";
		}
    if (trim($miUsuario["uCiudad"]) == "") {
      $errores[] = "Ingresa una ciudad";
    }
    if (trim($miUsuario["uCP"]) == "") {
      $errores[] = "Ingresa un codigo postal";
    }
    if (trim($miUsuario["uProvincia"]) == "") {
      $errores[] = "Ingresa una provincia";
    }
*/
		if ($miUsuario["uUser"] == "") {
			$errores[] = "Ingresa un usuario";
		} else {
			if (existeElUsuario($miUsuario["uUser"]) && !isset($_SESSION["usuario"])) {
				$errores[] = "El Usuario ingresado ya existe";
				}
			}
		if (trim($miUsuario["pass"]) == "") {
			$errores[] = "Ingresa tu contraseña";
		}
		if (trim($miUsuario["cpass"]) == "") {
			$errores[] = "Ingresa tu contraseña nuevamente";
		}
		if ($miUsuario["pass"] != $miUsuario["cpass"]) {
			$errores[] = "Las contraseñas ingresadas deben ser iguales";
		}
    if (!isset($miUsuario["uCondiciones"])) {
			$errores[] = "Debes aceptar los terminos y condiciones";
		}
		return $errores;
	}


	function existeElMail($mail)
	{
		$usuarios = file_get_contents("usuarios.json");
		$usuariosArray = explode(PHP_EOL, $usuarios);

		array_pop($usuariosArray);

		foreach ($usuariosArray as $key => $usuario) {
			$usuarioArray = json_decode($usuario, true);

			if ($mail == $usuarioArray["mail"])
			{
				return true;
			}
		}
		return false;
	}


	function existeElUsuario($user)
	{
		$usuarios = file_get_contents("usuarios.json");
		$usuariosArray = explode(PHP_EOL, $usuarios);

		array_pop($usuariosArray);

		foreach ($usuariosArray as $key => $usuario) {
			$usuarioArray = json_decode($usuario, true);

			if ($user == $usuarioArray["usuario"])
			{
				return true;
			}
		}
		return false;
	}


		function crearUsuario($miUsuario)
	{

		if ($_FILES["uFoto"]["error"] == UPLOAD_ERR_OK)
		{
			$uniqid = uniqid();
			$rand_start = rand(1,5);
			$rand_8_char = substr($uniqid,$rand_start,8);
			$nombre=$_FILES["uFoto"]["name"];
			$archivo=$_FILES["uFoto"]["tmp_name"];
			$ext = pathinfo($nombre, PATHINFO_EXTENSION);
			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/img/";
			$miNombreArchivo = "FotoPerfil_" . $rand_8_char . "." . $ext;
			$miArchivo = $miArchivo . $miNombreArchivo;

			move_uploaded_file($archivo, $miArchivo);
		}

		$usuario = [
			"nombre" => $miUsuario["uNombre"],
			"apellido" => $miUsuario["uApellido"],
			"mail" => $miUsuario["uMail"],
      "telefono" => $miUsuario["uTelefono"],
      "foto" => isset($miNombreArchivo) ? $miNombreArchivo : NULL,
      "direccion1" => $miUsuario["uDireccion1"],
      "direccion2" => $miUsuario["uDireccion2"],
      "ciudad" => $miUsuario["uCiudad"],
      "cp" => $miUsuario["uCP"],
      "provincia" => $miUsuario["uProvincia"],
			"usuario" => $miUsuario["uUser"],
			"password" => password_hash($miUsuario["pass"], PASSWORD_DEFAULT),
			"id" => traerNuevoId()
		];

		$_SESSION["usuario"] = $miUsuario["uUser"];
		$_SESSION["nombre"] = $miUsuario["uNombre"];

		return $usuario;
	}

  function guardarUsuario($miUsuario) {
		$usuarioJSON = json_encode($miUsuario);
		file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
	}


	function editarUsuario($uUser) {

			if ($_FILES["uFoto"]["error"] == UPLOAD_ERR_OK) {
				$uniqid = uniqid();
				$rand_start = rand(1,5);
				$rand_8_char = substr($uniqid,$rand_start,8);
				$nombre=$_FILES["uFoto"]["name"];
				$archivo=$_FILES["uFoto"]["tmp_name"];
				$ext = pathinfo($nombre, PATHINFO_EXTENSION);
				$miArchivo = dirname(__FILE__);
				$miArchivo = $miArchivo . "/img/";
				$miNombreArchivo = "FotoPerfil_" . $rand_8_char . "." . $ext;
				$miArchivo = $miArchivo . $miNombreArchivo;
				move_uploaded_file($archivo, $miArchivo);
			}

				$usuarios = file_get_contents("usuarios.json");
				$usuariosArray = explode(PHP_EOL, $usuarios);
				file_put_contents("usuarios.json", '');

				array_pop($usuariosArray);

				foreach ($usuariosArray as $key => $usuario) {
					$usuarioArray = json_decode($usuario, true);
						if ($uUser == $usuarioArray["usuario"]) {
							$usuarioArray["nombre"] = $_POST["uNombre"];
							$usuarioArray["apellido"] = $_POST["uApellido"];
							$usuarioArray["telefono"] = $_POST["uTelefono"];
							if ($_FILES["uFoto"]["error"] == UPLOAD_ERR_OK) {
								$usuarioArray["foto"] = $miNombreArchivo;
							};
							$usuarioArray["direccion1"] = $_POST["uDireccion1"];
							$usuarioArray["direccion2"] = $_POST["uDireccion2"];
							$usuarioArray["ciudad"] = $_POST["uCiudad"];
							$usuarioArray["cp"] = $_POST["uCP"];
							$usuarioArray["provincia"] = $_POST["uProvincia"];
							$usuarioArray["password"] = password_hash($_POST["pass"], PASSWORD_DEFAULT);
							$todosUsuarios = json_encode($usuarioArray);
						} else {
							$todosUsuarios = json_encode($usuarioArray);
						}
					file_put_contents("usuarios.json", $todosUsuarios . PHP_EOL, FILE_APPEND);
				}
			}


			function resetearPass($mail) {

					$usuarios = file_get_contents("usuarios.json");
					$usuariosArray = explode(PHP_EOL, $usuarios);
					file_put_contents("usuarios.json", '');
					array_pop($usuariosArray);

					$uniqid = uniqid();
					$rand_start = rand(1,5);
					$rand_10_char = substr($uniqid,$rand_start,10);

					foreach ($usuariosArray as $key => $usuario) {
						$usuarioArray = json_decode($usuario, true);
							if ($mail == $usuarioArray["mail"]) {
								$nuevopass = $rand_10_char;
								$usuarioArray["password"] = password_hash($nuevopass, PASSWORD_DEFAULT);
								$todosUsuarios = json_encode($usuarioArray);
							} else {
								$todosUsuarios = json_encode($usuarioArray);
							}
						file_put_contents("usuarios.json", $todosUsuarios . PHP_EOL, FILE_APPEND);
					}
					mailNuevoPass($mail, $nuevopass);
				}

			function mailNuevoPass($mail, $pass) {

				$destinatario = $mail;
				$asunto = "Nueva Contraseña";
				$cuerpo = '
				<html>
				<head>
				   <title>Nueva Contraseña</title>
				</head>
				<body>
				<h1>Kronos</h1>
				<br>
				<p>Hemos recibido una solicitud para resetear tu contraseña.</p><br>
				<p>Tu nueva contraseña es: <b>' . $pass . '</b></p>
				<br>
				Te recomendamos cambiarla por una que puedas recordar :)<br>
				Ahora si, <a href="http://localhost/sprintt/login.php">¡quiero loguearme!</a>
				</body>
				</html>
				';
				//para el envío en formato HTML
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: Kronos <info@kronos.com.ar>\r\n";
				$headers .= "Reply-To: info@kronos.com.ar\r\n";
				$headers .= "Return-path: info@kronos.com.ar\r\n";

				mail($destinatario,$asunto,$cuerpo,$headers);
			}


	function traerNuevoId() {
		$usuarios = file_get_contents("usuarios.json");
		$usuariosArray = explode(PHP_EOL, $usuarios);

		//Para quitar el último ENTER
		array_pop($usuariosArray);

		if (count($usuarios) == 0) {
			return 1;
		}

		$ultimoUsuario = $usuariosArray[count($usuariosArray) - 1];
		$ultimoUsuarioArray = json_decode($ultimoUsuario, true);

		return $ultimoUsuarioArray["id"] + 1;
	}

	function usuarioCreado() {
		header("location:exito.php");exit;
	}


	function usuarioEditado() {
		header("location:perfil.php");exit;
	}


/*
		if (isset($_POST['user']) && isset($_POST['pass'])) {
			$usuario = $_POST['user'];
			$pass = $_POST['pass'];
		}


		function logueo($mail,$pass)
		{
			$usuarios = file_get_contents("usuarios.json");
			$usuariosArray = explode(PHP_EOL, $usuarios);
			array_pop($usuariosArray);

			foreach ($usuariosArray as $key => $usuario) {
				$usuarioArray = json_decode($usuario, true);

				if ($mail == $usuarioArray["mail"] && $pass == $usuarioArray["mail"])
				{
					return true;
				}
			}
			return false;
		}

*/


?>
