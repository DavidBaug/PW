<?php

$message = "Sesión cerrada";
echo "<script type='text/javascript'>alert('$message');</script>";


session_start();
if(session_destroy()) // Destroying All Sessions
{
  // Borrar variables
  unset($_SESSION['username']);
  unset($_SESSION['name']);
  unset($_SESSION['lastname']);
  unset($_SESSION['mail']);
  unset($_SESSION['password']);

  header("Location: index.php"); // Redirecting To Home Page
}
?>
