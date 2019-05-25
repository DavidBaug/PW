<html lang="es" dir="ltr">
  <?php require("head.php"); ?>

  <body>

    <?php
      require("header_login.php");
      require("navbar_login.php");

    ?>

        <section id="cuerpo">

          <form id="registro" method="post" action="registration.php">
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
              <button class="botonregistro" type="submit" name="login" formaction="registration.php">Registrarse</button>

            </section>

          </form>


        </section>

        <?php
          require("footer.php");
        ?>


    </body>

    </html>
