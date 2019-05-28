<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php
  require('db.php');
  require('head.php');
  ?>

  <body>

    <?php
      require('header.php');

    ?>

    <nav id="navbar">

      <!-- <div class="button">
        <input id="toggle" checked type="checkbox" value="1" style="display:none;"><i style="color:white;"class="fa fa-bars"></i>
        <label for="toggle"></label>
      </div> -->
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
        <li><a class="active" href="#">Libro leido</a></li>
      </ul>
    </nav>


    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

    <?php

    $username = $_SESSION["username"];

    $id = $_GET['id'];

    $sql = "SELECT * FROM libro where id='$id';";
    $result =  mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $sql1 = "SELECT opinion, rating FROM libro_valorado where username='$username' and id='$id';";
    $result1 =  mysqli_query($conn, $sql1);

    $row1 = mysqli_fetch_assoc($result1);


    echo '
    <article id="libro">

      <section class="top_info">
        <img class="portada" src="'.$row["img"].'" >

        <section class="info">
          <section class="item">
            <p>Titulo: </p>
            <p>'.$row["title"].'</p>
          </section>
          <section class="item">
            <p>Autor: </p>
            <p>'.$row["autor"].'</p>
          </section>
          <section class="item">
            <p>Editorial: </p>
            <p>'.$row["editorial"].'</p>
          </section>
          <section class="item">
            <p>Año: </p>
            <p>'.$row["year"].'</p>
          </section>
          <section class="item">
            <p>Edición: </p>
            <p>'.$row["editor"].'</p>
          </section>
        </section>

      </section>

      <section class="bot_info">
        <section class="descripcion">
          <p>Descripción</p>
          <p>'.$row["description"].'</p>
        </section>

        <form class="" action="create_opinion.php?id='.$id.'" method="post">
          <section class="opinion">
            <p>Opinión</p>
            <textarea name="opinion" rows="8" cols="100"></textarea>

          </section>

          <section class="valoracion">
            <p>Mi valoración</p>
            <input type="radio" name="valoracion" value="1" > 1
            <input type="radio" name="valoracion" value="2" > 2
            <input type="radio" name="valoracion" value="3" > 3
            <input type="radio" name="valoracion" value="4" > 4
            <input type="radio" name="valoracion" value="5" > 5
          </section>
        </section>

        <button class="submit" type="submit" name="button">Valorar</button>

        </form>

    </article>


    ';


    require("footer.php");

    ?>




  </body>

</html>
