<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
	require('db.php');
	require_once('configuracion.php');
	require('datosObject.class.inc');

	try {
		$conexion = new PDO( DB_DSN, DB_USUARIO, DB_CONTRASENIA );
		// Se permite a PHP que mantenga la conexión MySQL abierta para
		// que se emplee en otras partes de la aplicación.
		$conexion->setAttribute( PDO::ATTR_PERSISTENT, true );
		$conexion->setAttribute(PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e ) {
		die( "Conexión fallida: " . $e->getMessage() );
	}

    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$lastname = stripslashes($_REQUEST['lastname']);
		$lastname = mysqli_real_escape_string($con,$lastname);

		echo "$username";

    $query = "INSERT into `usuario` VALUES ('$username', '$name','$lastname','$email','".md5($password)."');";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    }else {
        echo "ashdaoishdoaishdosih";
    }
    }
?>

<?php include('recursos/header_login.html') ?>

<section id="cuerpo">

	<form id="registro" method="post">
		<h2 style="width: -webkit-fill-available;text-align: -webkit-center;">Registro</h2>
		<section class="izq">
			<img class="portada" src="imagenes/noimagen.png" >
			<button type="button" name="button">Cargar imagen</button>
		</section>

		<section class="der">
			<input class="items" type="text" name="name" value="" placeholder="Nombre" required>
			<br>
			<input class="items" type="text" name="lastname" value="" placeholder="Apellidos" required>
			<br>
			<input class="items" type="text" name="email" value="" placeholder="Correo electronico" required>
			<br>
			<input class="items" type="text" name="username" value="" placeholder="Nombre de usuario" required>
			<br>
			<input class="items" type="password" name="password" value="" placeholder="Contraseña" required>
			<br>
			<button class="botonregistro" type="submit" name="login" formaction="">Registrarse</button>

		</section>

	</form>

<?php include('recursos/footer.html') ?>

</body>
</html>
