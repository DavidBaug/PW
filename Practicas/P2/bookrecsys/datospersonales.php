<?php

require('db.php');


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
    <li><a href="mislibros.html">Mis libros</a></li>
    <li><a href="foro.html">Foro</a></li>
    <li><a class="active" href="datospersonales.html">Mis datos</a></li>
    <li><a href="recomendaciones_u1.html">Mis recomendaciones</a></li>
    <li><a class="exit" style="background-color: red;" href="index.html">Cerrar sesión</a></li>
  </ul>

  <ul class="menu">
    <li><a href="mislibros.html">Mis libros</a></li>
    <li><a href="foro.html">Foro</a></li>
    <li><a class="active" href="datospersonales.html">Mis datos</a></li>
    <li><a href="recomendaciones_u1.html">Mis recomendaciones</a></li>
    <li><a href="#"></a></li>
  </ul>
</nav>
';




require('html/datospersonales.html');




require('footer.php');

echo '</html>';



 ?>
