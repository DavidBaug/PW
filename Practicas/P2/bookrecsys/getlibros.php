<?php

echo '
<body>

  <section id="cuerpo">

    <article id="imagen_relacionada">
      <img src="imagenes/libros.jpg" alt="">
    </article>

    <article id="libros">

      <h3 class="seccion">Libros mejor valorados</h3>

      <hr>

      <ul class="lista">';


          $sql = "SELECT * FROM libro";

          $result =  mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

              while($row = mysqli_fetch_assoc($result)) {

                $id = $row["id"];

                echo '
                <li class="item">
                  <a href="libro.php?id='.$id.'"><h4 class="titulo">'. $row["title"].'</h4></a>
                  <a href="libro.php?id='.$id.'"><img class="portada"src="'. $row["img"].'" alt=""></a>
                  <p class="descripcion">'. $row["description"].'</p>
                  <p class="autor">'. $row["autor"].'</p>
                </li>
                <hr>
                ';

              }
          } else {
              echo "<p>No has leído ningún libro :(</p>";
          }

echo '
      </ul>
    </article>

  </section>

</body>
';

?>
