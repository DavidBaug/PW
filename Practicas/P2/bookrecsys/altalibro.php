<?php
require('db.php');

echo '
<html lang="es" dir="ltr">

';

require('head.php');
require('header.php');

?>

<script type="text/javascript">

  function validacion() {

    img = document.getElementById("imgform").selectedIndex;
    title = document.getElementById("titleform").value;
    autor = document.getElementById("autorform").value;
    editorial = document.getElementById("editorialform").selectedIndex;
    anio = document.getElementById("anioform").value;
    editor = document.getElementById("editorform").value;
    descripcion = document.getElementById("descripcionform").value;
    opinion = document.getElementById("opinionform").value;
    valoracion = document.getElementById("valoracionform").value;


    if( img == null ) {
      alert("Selecciona una imagen");
      return false;
    }

    if( editorial == null ) {
      return false;
    }

    if( anio < 0 ) {
      alert("El año debe ser positivo");
      return false;
    }

    if (title.length > 60) {
      alert("El título no debe contener más de 60 caracteres");
      return false;
    }

    if (autor.length > 50) {
      alert("El autor no debe contener más de 50 caracteres");
      return false;
    }

    if (editor.length > 50) {
      alert("El editor no debe contener más de 50 caracteres");
      return false;
    }

    if (editorial.length > 30) {
      return false;
    }

    if (descripcion.length > 3000) {
      alert("La descripción no debe contener más de 3000 caracteres");
      return false;
    }

    if (opinion.length > 3000) {
      alert("La opinión no debe contener más de 3000 caracteres");
      return false;
    }

    var seleccionado = false;
    for(var i=0; i<valoraciones.length; i++) {
      if(valoraciones[i].checked) {
        seleccionado = true;
        break;
      }
    }

    if(!seleccionado) {
      alert("Debes valorar el libro");
      return false;
    }

    return true;
  }


</script>

<?php

echo '
<nav id="navbar">

  <input id="show" type="checkbox" name="" value="">
  <label id="ham" for="show"><i style="color:white;"class="fa fa-bars"></i></label>

  <ul class="alert">
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
    <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
  </ul>

  <ul class="menu">
    <li><a href="mislibros.php">Mis libros</a></li>
    <li><a href="foro.php">Foro</a></li>
    <li><a href="datospersonales.php">Mis datos</a></li>
    <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
    <li><a class="active" href="#">Alta libro</a></li>
  </ul>
</nav>
';


echo '
<form class="" action="registration_book.php" method="post" onsubmit="return validacion();">
<article id="libro">

  <section class="top_info">
    <div class="imagen_alta">
      <img class="portada" src="imagenes/noimagen.png" >
      <select id="imgform" name="img" required>
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
        <input id="titleform" type="text" name="titulo" value="" maxlength="60" required>
      </section>
      <section class="item">
        <p>Autor: </p>
        <input id="autorform" type="text" name="autor" value="" maxlength="50" required>
      </section>
      <section class="item">
        <p>Editorial: </p>
        <select id="editorialform" name="editorial" required>
           <option value="Anagrama">Anagrama editorial</option>
           <option value="Blackie">Blackie Books</option>
           <option value="Seix">Seix Barral</option>
           <option value="Planeta">Planeta</option>
           <option value="Valdemar">Valdemar</option>
        </select>
      </section>
      <section class="item">
        <p>Año: </p>
        <input id="anioform" type="number" name="anio" value="" required>
      </section>
      <section class="item">
        <p>Edición: </p>
        <input id="editorform" type="text" name="editor" value="" maxlength="50" required>
      </section>
    </section>

  </section>

  <section class="bot_info">
    <section class="descripcion">
      <p>Descripción</p>
      <textarea id="descripcionform" name="descripcion" rows="8" cols="100" maxlength="3000" required></textarea>
      </section>

    <section class="opinion">
      <p>Opinión</p>
      <textarea id="opinionform" name="opinion" rows="8" cols="100" maxlength="3000" required></textarea>
    </section>

    <section class="valoracion">
      <p>Mi valoración</p>
      <input id="valoracionform" type="radio" name="valoracion" value="1" > 1
      <input id="valoracionform" type="radio" name="valoracion" value="2" > 2
      <input id="valoracionform" type="radio" name="valoracion" value="3" > 3
      <input id="valoracionform" type="radio" name="valoracion" value="4" > 4
      <input id="valoracionform" type="radio" name="valoracion" value="5" > 5
      <input class="submit" type="submit" name="" value="Enviar">
    </section>

  </section>
</article>
</form>

';


require('footer.php');

echo '</html>';


?>
