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
        <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
        <li><a class="exit" style="background-color: red;" href="logout.php">Cerrar sesión</a></li>
      </ul>

      <ul class="menu">
        <li><a href="mislibros.php">Mis libros</a></li>
        <li><a href="foro.php">Foro</a></li>
        <li><a href="datospersonales.php">Mis datos</a></li>
        <li><a href="recomendaciones.php">Mis recomendaciones</a></li>
        <li><a class="active" href="#">Libro leido</a></li>
      </ul>
    </nav>


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
              alert("Debes valorar el libro")
              return false;
            }

            return true;
          }


        </script>



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

        <form class="" action="update_opinion.php?id='.$id.'" method="post" onsubmit="return validacion();">
          <section class="opinion">
            <p>Opinión</p>
            <textarea name="opinion" rows="8" cols="100" placeholder="'.$row1["opinion"].'" maxlength="3000"></textarea>

          </section>

          <section class="valoracion">
            <p>Mi valoración</p>
            ';
            if($row1["rating"]==1) {
                echo '
                <input type="radio" name="valoracion" value="1" checked> 1
                <input type="radio" name="valoracion" value="2" > 2
                <input type="radio" name="valoracion" value="3" > 3
                <input type="radio" name="valoracion" value="4" > 4
                <input type="radio" name="valoracion" value="5" > 5
                ';
              }elseif ($row1["rating"]==2) {
                echo '
                <input type="radio" name="valoracion" value="1" > 1
                <input type="radio" name="valoracion" value="2" checked> 2
                <input type="radio" name="valoracion" value="3" > 3
                <input type="radio" name="valoracion" value="4" > 4
                <input type="radio" name="valoracion" value="5" > 5
                ';
              }elseif ($row1["rating"]==3) {
                echo '
                <input type="radio" name="valoracion" value="1" > 1
                <input type="radio" name="valoracion" value="2" > 2
                <input type="radio" name="valoracion" value="3" checked> 3
                <input type="radio" name="valoracion" value="4" > 4
                <input type="radio" name="valoracion" value="5" > 5
                ';
              }elseif ($row1["rating"]==4) {
                echo '
                <input type="radio" name="valoracion" value="1" > 1
                <input type="radio" name="valoracion" value="2" > 2
                <input type="radio" name="valoracion" value="3" > 3
                <input type="radio" name="valoracion" value="4" checked> 4
                <input type="radio" name="valoracion" value="5" > 5
                ';
              }elseif ($row1["rating"]==5) {
                echo '
                <input type="radio" name="valoracion" value="1" > 1
                <input type="radio" name="valoracion" value="2" > 2
                <input type="radio" name="valoracion" value="3" > 3
                <input type="radio" name="valoracion" value="4" > 4
                <input type="radio" name="valoracion" value="5" checked> 5
                ';
              }
      echo '
          </section>
        </section>

        <button class="submit" type="submit" name="button">Actualizar</button>

        </form>

    </article>


    ';


    require("footer.php");

    ?>



  </body>

</html>
