<?php
require('db.php');

if(!isset($_SESSION["username"])){
  echo '
  <html lang="es" dir="ltr">

  ';

  require('head.php');
  require('header_login.php');
  require('navbar_login.php');
  require('html/index.html');
  require('footer.php');

  echo '</html>';

}else {
  // $message = "Sesión abierta";
  // echo "<script type='text/javascript'>alert('$message');</script>";

  echo '
  <html lang="es" dir="ltr">

  ';

  require('head.php');
  require('header.php');
  require('navbar.php');
  require('html/index.html');
  require('footer.php');

  echo '</html>';

}



?>
