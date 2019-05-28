<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booksplat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <?php
      require('db.php');
      require('header.php');

      ?>

    <nav id="navbar">

      <input id="show" type="checkbox" name="" value="">
      <label id="ham" for="show"><i style="color:white;"class="fa fa-bars"></i></label>

      <ul class="alert">
        <li><a class="active" href="mislibros.html">Mis libros</a></li>
        <li><a href="foro.html">Foro</a></li>
        <li><a href="datospersonales.html">Mis datos</a></li>
        <li><a href="recomendaciones_u1.html">Mis recomendaciones</a></li>
        <li><a class="exit" style="background-color: red;" href="index.html">Cerrar sesión</a></li>
      </ul>

      <ul class="menu">
        <li><a class="active" href="mislibros.html">Mis libros</a></li>
        <li><a href="foro.html">Foro</a></li>
        <li><a href="datospersonales.html">Mis datos</a></li>
        <li><a href="recomendaciones_u1.html">Mis recomendaciones</a></li>
        <li><a href="#"></a></li>
      </ul>
    </nav>


    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

    <section id="cuerpo">


      <input id="item1" type="radio" name="secciones" value="Mis libros leidos" hidden checked>
      <input id="item2" type="radio" name="secciones" value="Últimos libros subidos" hidden>

      <div id="secciones">
        <label class="item1" for="item1"><h3>Mis libros leidos</h3></label>
        <label class="item2" for="item2"><h3>Últimos libros subidos</h3></label>
      </div>


      <article id="libros_leidos">


        <div class="box">
          <ul class="lista">

            <?php

              $username = $_SESSION["username"];

              $sql = "SELECT id FROM libro_valorado where username='$username';";
              $result =  mysqli_query($conn, $sql);

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
                      <p class="descripcion">'. $row1["description"].'</p>
                      <p class="autor">'. $row1["autor"].'</p>
                    </li>
                    <hr>
                    ';

                  }
              } else {
                  echo "<p>No has leído ningún libro :(</p>";
              }

             ?>


          </ul>
        </div>
      </article>

      <article id="ultimos_subidos">

        <div class="box">
        <ul class="lista">
          <?php

            $sql = "SELECT id FROM libro_valorado;";

            $result =  mysqli_query($conn, $sql);

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
                echo "<p>No hay libros valorados</p>";
            }
           ?>

          <section class="altalibro">
            <a href="altalibro.html">Dar de alta nuevo libro</a>
          </section>

        </ul>
        </div>


      </article>

    </section>

<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

<footer id="pie">
  <section>
    <a id="contacto" href="mailto:davidgilbautista@gmail.com">Contacto</a>
    <a id="pdf" href="como_se_hizo.pdf"><p>Cómo se hizo</p></a>
  </section>
</footer>

  </body>

</html>
