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
        <li><a class="active" href="#">Libro valorado</a></li>
      </ul>
    </nav>


    <?php
      function calculaValoracion($res){
        $i = 0;
        $suma = 0;

        while($row = mysqli_fetch_assoc($res)) {
          $suma = $suma + $row["rating"];
          $i = $i+1;
        }

        return $suma/$i;
      }
     ?>

    <?php
      $username = $_SESSION["username"];

      $id = $_GET['id'];

      $sql = "SELECT * FROM libro where id='$id';";
      $result =  mysqli_query($conn, $sql);

      $row = mysqli_fetch_assoc($result);

      $sql1 = "SELECT opinion, rating, username FROM libro_valorado where id='$id';";
      $result1 =  mysqli_query($conn, $sql1);

      $valoracion = calculaValoracion($result1);


      echo '
      <article id="libro">

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

          ';

          echo '

          <p style="text-align:center;">Valoración media: '.$valoracion.'</p>

        </article>

        <hr>

        <h4 style="text-align:center;">Opiniones</h4>
        <article class="opiniones">';

        while($row = mysqli_fetch_assoc($result1)) {

            echo'
            <section class="item">
              <p>'.$row["username"].'</p>
              <p>'.$row["opinion"].'</p>
            </section>';

        }

          echo'

        </article>

        <section class="opiniones_navegacion">
          <a href="libro1a.php">Anterior</a>
          <a href="libro1b.php">Siguiente</a>
        </section>

        <section class="alta">
          <a href="valoracion_libro.php?id='.$id.'">Valorar libro</a>
        </section>


      </article>

      ';



     ?>




    <?php
      require("footer.php");
      ?>

  </body>

</html>
