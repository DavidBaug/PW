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
          <li><a class="active" href="foro.php">Foro</a></li>
          <li><a href="datospersonales.php">Mis datos</a></li>
          <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
          <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
        </ul>

        <ul class="menu">
          <li><a href="mislibros.php">Mis libros</a></li>
          <li><a class="active" href="foro.php">Foro</a></li>
          <li><a href="datospersonales.php">Mis datos</a></li>
          <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
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



    <article class="zona">
      <section>
        <h4>Zona general</h4>
        <a href="nuevohilo.php">Añadir hilo</a>
      </section>

      <ul>
        <li class="hilo">
          <a href="hilo1.php">
            <section class="top">
              <p>Ult. modificación: 4/03/19 09:47</p>
              <p>Creado por: erseco</p>
            </section>

            <p class="titulo_hilo">Normas de uso</p>

            <section class="bot">
              <ul>
                <li><a href="#">Compartir</a></li>
                <li><a href="#">Favorito</a></li>
                <li><a href="hilo1.php#comentarios">Comentarios</a></li>
                <li><a href="hilo1.php#comenta">Contestar</a></li>
              </ul>
            </section>
          </a>
        </li>

        <li class="hilo">
          <a href="hilo1.php">
            <section class="top">
              <p>Ult. modificación: 8/01/19 19:30</p>
              <p>Creado por: erseco</p>
            </section>

            <p class="titulo_hilo">FAQ</p>

            <section class="bot">
              <ul>
                <li><a href="#">Compartir</a></li>
                <li><a href="#">Favorito</a></li>
                <li><a href="hilo1.php#comentarios">Comentarios</a></li>
                <li><a href="hilo1.php#comenta">Contestar</a></li>
              </ul>
            </section>
          </a>
        </li>

      </ul>

    </article>

    <article class="zona">
      <section>
        <h4>Zona fantasía</h4>
        <a href="nuevohilo.php">Añadir hilo</a>
      </section>

      <ul>
        <li class="hilo">
          <a href="hilo1.php">
            <section class="top">
              <p>Ult. modificación: 20/04/19 13:52</p>
              <p>Creado por: Maricarmen</p>
            </section>

            <p class="titulo_hilo">Ranking personajes más inútiles en la saga Harry Potter</p>

            <section class="bot">
              <ul>
                <li><a href="#">Compartir</a></li>
                <li><a href="#">Favorito</a></li>
                <li><a href="hilo1.php#comentarios">Comentarios</a></li>
                <li><a href="hilo1.php#comenta">Contestar</a></li>
              </ul>
            </section>
          </a>
        </li>


      </ul>

    </article>

    <article class="zona">
      <section>
        <h4>Zona chismes</h4>
        <a href="nuevohilo.php">Añadir hilo</a>
      </section>

      <ul>
        <li class="hilo">
          <a href="hilo1.php">
            <section class="top">
              <p>Ult. modificación: 24/04/29 11:52</p>
              <p>Creado por: futurista</p>
            </section>

            <p class="titulo_hilo">Por qué los directores se casan con escritores</p>

            <section class="bot">
              <ul>
                <li><a href="#">Compartir</a></li>
                <li><a href="#">Favorito</a></li>
                <li><a href="hilo1.php#comentarios">Comentarios</a></li>
                <li><a href="hilo1.php#comenta">Contestar</a></li>
              </ul>
            </section>
          </a>
        </li>

        <li class="hilo">
          <a href="hilo1.php">
            <section class="top">
              <p>Ult. modificación: 14/04/19 23:41</p>
              <p>Creado por: cotillista</p>
            </section>

            <p class="titulo_hilo">JKROWNLING VISTA CON SEVERUS SNAPE, SALSEO SALSEO</p>

            <section class="bot">
              <ul>
                <li><a href="#">Compartir</a></li>
                <li><a href="#">Favorito</a></li>
                <li><a href="hilo1.php#comentarios">Comentarios</a></li>
                <li><a href="hilo1.php#comenta">Contestar</a></li>
              </ul>
            </section>
          </a>
        </li>

      </ul>

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
