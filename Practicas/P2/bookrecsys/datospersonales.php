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
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a class="active" href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
    <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
  </ul>

  <ul class="menu">
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a class="active" href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
    <li><a href="#"></a></li>
  </ul>
</nav>
';

$username = $_SESSION['username'];

$sql1 = "SELECT img FROM usuario where username='$username';";
$result1 =  mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

echo '
<section id="cuerpo">

  <form id="registro" method="post" action="update_profile.php">
    <h2 style="width: -webkit-fill-available;text-align: -webkit-center;">Editar perfil</h2>
    <section class="izq">
      <img class="portada" src="'.$row1["img"].'" >
      <select name="img">
        <option value="" selected="true" disabled="disabled">Selecciona una foto</option>
        <option value="perfil1">Perfil 1</option>
        <option value="perfil2">Perfil 2</option>
        <option value="perfil3">Perfil 3</option>
        <option value="perfil4">Perfil 4</option>
        <option value="perfil5">Perfil 5</option>
      </select>
    </section>

    <section class="der">
      <input class="items" type="text" name="name" value="" placeholder="Nombre" >
      <br>
      <input class="items" type="text" name="lastname" value="" placeholder="Apellidos" >
      <br>
      <input class="items" type="text" name="email" value="" placeholder="Correo electronico" >
      <br>
      <input class="items" type="text" name="username" value="" placeholder="Nombre de usuario" >
      <br>
      <input class="items" type="password" name="password" value="" placeholder="Contraseña" >
      <br>
      <button class="botonregistro" type="submit" name="update" formaction="update_profile.php">Actualizar perfil</button>

    </section>

  </form>

</section>
';




require('footer.php');

echo '</html>';



 ?>
