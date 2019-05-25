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
  $message = "Sesión abierta";
  echo "<script type='text/javascript'>alert('$message');</script>";

  echo '
  <html lang="es" dir="ltr">

  ';

  require('head.php');
  require('header.php');

echo '
    <nav id="navbar">

      <input id="show" type="checkbox" name="" value="">
      <label id="ham" for="show"><i style="color:white;"class="fa fa-bars"></i></label>
      <ul class="alert">
        <li><a href="mislibros.php">Mis libros</a></li>
        <li><a href="foro.php">Foro</a></li>
        <li><a href="datospersonales.php">Mis datos</a></li>
        <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
        <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
      </ul>

      <ul class="menu">
        <li><a href="mislibros.php">Mis libros</a></li>
        <li><a href="foro.php">Foro</a></li>
        <li><a href="datospersonales.php">Mis datos</a></li>
        <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
        <li><a class="active" href="#">Index</a></li>
      </ul>
    </nav>
  ';


  require('html/index.html');
  require('footer.php');

  echo '</html>';

}



?>
