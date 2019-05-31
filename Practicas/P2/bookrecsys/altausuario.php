<html lang="es" dir="ltr">
  <?php require("head.php"); ?>

  <body>

    <?php
      require("header_login.php");
      require("navbar_login.php");

    ?>


        <section id="cuerpo">

          <form id="registro" method="post" action="registration.php" onsubmit="return ValidacionAlta();">
            <h2 style="width: -webkit-fill-available;text-align: -webkit-center;">Registro</h2>
            <section class="izq">
              <img class="portada" src="imagenes/noimagen.png" >
              <select id="imgform" name="img" required>
                <option value="" selected="true" disabled="disabled">Selecciona una foto</option>
                <option value="perfil">Perfil 1</option>
                <option value="perfil1">Perfil 2</option>
                <option value="perfil2">Perfil 3</option>
                <option value="perfil3">Perfil 4</option>
                <option value="perfil4">Perfil 5</option>
                <option value="perfil5">Perfil 6</option>
              </select>
            </section>

            <section class="der">
              <input id="namealta" class="items" type="text" name="name" value="" placeholder="Nombre" maxlength="40" required>
              <br>
              <input id="lastnamealta" class="items" type="text" name="lastname" value="" placeholder="Apellidos" maxlength="40" required>
              <br>
              <input id="mailalta" class="items" type="text" name="email" value="" placeholder="Correo electronico" maxlength="50" required>
              <br>
              <input id="usernamealta" class="items" type="text" name="username" value="" placeholder="Nombre de usuario" maxlength="30" required>
              <br>
              <input id="passalta" class="items" type="password" name="password" value="" placeholder="Contraseña" maxlength="30" required>
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
