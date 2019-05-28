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
    <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
  </ul>

  <ul class="menu">
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones_u1.php">Mis recomendaciones</a></li>
    <li><a class="active" href="#">Alta libro</a></li>
  </ul>
</nav>
';


echo '
<form class="" action="registration_book.php" method="post">
<article id="libro">

  <section class="top_info">
    <div class="imagen_alta">
      <img class="portada" src="imagenes/noimagen.png" >
      <select name="img" required>
        <option value="" selected="true" disabled="disabled">Selecciona una portada</option>
        <option value="portada1">Portada 1</option>
        <option value="portada2">Portada 2</option>
        <option value="portada3">Portada 3</option>
        <option value="portada4">Portada 4</option>
        <option value="portada5">Portada 5</option>
        <option value="portada6">Portada 6</option>
        <option value="portada7">Portada 7</option>
        <option value="portada8">Portada 8</option>
        <option value="portada9">Portada 9</option>
      </select>

    </div>


    <section class="info">
      <section class="item">
        <p>Titulo: </p>
        <input type="text" name="titulo" value="" required>
      </section>
      <section class="item">
        <p>Autor: </p>
        <input type="text" name="autor" value="" required>
      </section>
      <section class="item">
        <p>Editorial: </p>
        <select name="editorial" required>
           <option value="Anagrama">Anagrama editorial</option>
           <option value="Blackie">Blackie Books</option>
           <option value="Seix">Seix Barral</option>
           <option value="Planeta">Planeta</option>
           <option value="Valdemar">Valdemar</option>
        </select>
      </section>
      <section class="item">
        <p>Año: </p>
        <input type="number" name="anio" value="" required>
      </section>
      <section class="item">
        <p>Edición: </p>
        <input type="text" name="editor" value="" required>
      </section>
    </section>

  </section>

  <section class="bot_info">
    <section class="descripcion">
      <p>Descripción</p>
      <textarea name="descripcion" rows="8" cols="100" required></textarea>
      </section>

    <section class="opinion">
      <p>Opinión</p>
      <textarea name="opinion" rows="8" cols="100" required></textarea>
    </section>

    <section class="valoracion">
      <p>Mi valoración</p>
      <input type="radio" name="valoracion" value="1" > 1
      <input type="radio" name="valoracion" value="2" > 2
      <input type="radio" name="valoracion" value="3" > 3
      <input type="radio" name="valoracion" value="4" > 4
      <input type="radio" name="valoracion" value="5" > 5
      <input class="submit" type="submit" name="" value="Enviar">
    </section>

  </section>
</article>
</form>

';


require('footer.php');

echo '</html>';





?>
