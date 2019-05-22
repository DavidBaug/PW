<?php
  //Iniciamos la sesión php
  session_start();
  //Comprobamos si tenemos almacenadas las cookies
  if (isset($_COOKIE['email'])) {
  	//Las asignamos a la sesión
  	$_SESSION["s_username"] = $_COOKIE['cookie_username'];
  	$_SESSION["s_name"] = $_COOKIE['cookie_name'];
  	$_SESSION["s_lastname"] = $_COOKIE['cookie_lastname'];
  	$_SESSION["s_mail"] = $_COOKIE['cookie_mail'];
  //Si no, comprobamos si está establecida la variable de sesión user
} if (!isset($_SESSION['s_username'])) {

  	//Si no lo está, solicitamos que el usuario see loguee
    include('index.php');
  	exit;
  }

?>
