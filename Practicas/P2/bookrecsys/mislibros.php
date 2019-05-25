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
      <li><a href="datospersonales.php">Mis datos</a></li>
      <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
      <li><a class="exit" style="background-color: red;" href="index.php">Cerrar sesión</a></li>
    </ul>

    <ul class="menu">
      <li><a class="active" href="mislibros.php">Mis libros</a></li>
      <li><a href="foro.php">Foro</a></li>
      <li><a href="datospersonales.php">Mis datos</a></li>
      <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
      <li><a href="#">Index</a></li>
    </ul>
  </nav>
';

echo '
<article id="libros_leidos">
  <div class="box">
    <ul class="lista">';

$username = $_SESSION["username"];

$sql = "SELECT id FROM libro_valorado where username='$username';";

$result =  mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      $id = $row["id"];

      $sql = "SELECT title,description,autor,img FROM libro where id='$id';";
      $result =  mysqli_query($conn, $sql);
      $row1 = mysqli_fetch_assoc($result);

      echo '
      <li class="item">
        <a href="libroleido1.php"><h4 class="titulo">'. $row1["title"].'</h4></a>
        <a href="libroleido1.php"><img class="portada"src="'. $row1["img"].'" alt=""></a>
        <p class="descripcion">'. $row1["descripcion"].'</p>
        <p class="autor">'. $row1["autor"].'</p>
      </li>
      <hr>
      ';

    }
} else {
    echo "0 results";
}


echo '
    </ul>
  </div>
</article>
';





echo '
<article id="ultimos_subidos">

  <div class="box">
  <ul class="lista">

  ';

  $sql = "SELECT id FROM libro_valorado;";

  $result =  mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

        $id = $row["id"];

        $sql = "SELECT title,autor FROM libro where id='$id';";
        $result =  mysqli_query($conn, $sql);
        $row1 = mysqli_fetch_assoc($result);

        echo '
        <li class="item">
          <a href="libro1.php"><h4 class="titulo">'. $row1["title"].'</h4></a>
          <p class="autor">'. $row1["autor"].'</p>
        </li>

        <hr>
        ';

      }
  } else {
      echo "0 results";
  }

  echo'
      </ul>
    </div>
  </article>
  ';








require('footer.php');

echo '</html>';



 ?>
