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
    <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
    <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
  </ul>

  <ul class="menu">
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a class="active" href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
    <li><a href="#"></a></li>
  </ul>
</nav>
';


$username = $_SESSION['username'];

$sql1 = "SELECT * FROM usuario where username='$username';";
$result1 =  mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);


$sql2 = "SELECT id FROM libro_valorado where username='$username';";
$result2 =  mysqli_query($conn, $sql2);

$titulos = array();

while($row2 = mysqli_fetch_assoc($result2)){

  $id = $row2['id'];

  $sql3 = "SELECT title FROM libro where id='$id';";
  $result3 =  mysqli_query($conn, $sql3);
  $row3 = mysqli_fetch_assoc($result3);

  array_push($titulos, $row3['title']);
}

$aux = json_encode($titulos);
$aux_user = json_encode($username);

echo '
<section id="cuerpo">

  <form id="registro" method="post" onsubmit="return ValidacionUpdateUsuario()" action="update_profile.php" >
    <h2 style="width: -webkit-fill-available;text-align: -webkit-center;">Editar perfil</h2>
    <section class="izq">
      <img onmouseover="return PintaLibros();" class="portada" src="'.$row1["img"].'">

    </section>

    <section class="der">
      <input id="nameform" class="items" type="text" name="name" value="'.$row1["name"].'" placeholder="Nombre" maxlength="40" >
      <br>
      <input id="lastnameform" class="items" type="text" name="lastname" value="'.$row1["lastname"].'" placeholder="Apellidos" maxlength="40" >
      <br>
      <input id="mailform" class="items" type="text" name="email" value="'.$row1["mail"].'" placeholder="Correo electronico" maxlength="50" >
      <br>
      <input id="usernameform" class="items" type="text" name="username" value="'.$row1["username"].'" placeholder="Nombre de usuario"  minlength="8" maxlength="30" >
      <br>
      <input id="passform" class="items" type="password" name="password" value="'.$row1["passwd"].'" placeholder="Contraseña"  minlength="8" maxlength="30" >
      <br>
      <button class="botonregistro" type="submit" name="update" >Actualizar perfil</button>

    </section>

  </form>

</section>
';




require('footer.php');

echo '</html>';

 ?>

 <script>
  function PintaLibros(){

    var titulos = JSON.parse('<?= $aux; ?>');
    var user = JSON.parse('<?= $aux_user; ?>');

    var msg =" - " + titulos[0] + '\n';

    for (var i = 1; i < titulos.length; i++) {
      msg = msg + " - " +  titulos[i] + '\n';
    }

    alert(user + " ha subido los siguientes libros: \n\n" + msg);

  }
 </script>
