<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booksplat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name=”viewport” content=”width=device-width”>


    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <?php
      require_once "recursos/header_login.html";
      require_once "recursos/navbar_login.html";

    ?>


        <section id="cuerpo">

          <form id="registro" method="post">
            <h2 style="width: -webkit-fill-available;text-align: -webkit-center;">Registro</h2>
            <section class="izq">
              <img class="portada" src="imagenes/noimagen.png" >
              <button type="button" name="button">Cargar imagen</button>
            </section>

            <section class="der">
              <input class="items" type="text" name="name" value="" placeholder="Nombre" required>
              <br>
              <input class="items" type="text" name="lastname" value="" placeholder="Apellidos" required>
              <br>
              <input class="items" type="text" name="email" value="" placeholder="Correo electronico" required>
              <br>
              <input class="items" type="text" name="username" value="" placeholder="Nombre de usuario" required>
              <br>
              <input class="items" type="password" name="password" value="" placeholder="Contraseña" required>
              <br>
              <button class="botonregistro" type="submit" name="login" formaction="gestoraltausuario.php">Registrarse</button>

            </section>

          </form>


        </section>

        <?php
          require_once "recursos/footer.html";
        ?>


    </body>


    </html>
