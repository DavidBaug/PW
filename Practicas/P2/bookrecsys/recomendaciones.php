<?php

  echo '
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Booksplat</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">
    </head>

    <body>

    ';
    require('db.php');

    require("header.php");

    echo'

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
          <li><a class="active" href="recomendaciones.php">Mis recomendaciones</a></li>
          <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
        </ul>

        <ul class="menu">
          <li><a href="mislibros.php">Mis libros</a></li>
          <li><a href="foro.php">Foro</a></li>
          <li><a href="datospersonales.php">Mis datos</a></li>
          <li><a class="active" href="recomendaciones.php">Mis recomendaciones</a></li>
          <li><a href="#"></a></li>
        </ul>
      </nav>


      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
      <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

  <section id="cuerpo1">

    <article class="recomendaciones">

      <section class="fila">
        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada2.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada1.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada3.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada4.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada5.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada6.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>



      </section>

      <section class="fila">

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada7.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada8.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada9.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada3.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada2.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>

        <section class="item">
          <a href="libro.php?id=1">
            <img src="imagenes/portada5.jpg" alt="">
            <p>Titulo</p>
          </a>
        </section>
      </section>


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

  ';

 ?>
