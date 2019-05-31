<html lang="es" dir="ltr">
  <?php require("head.php"); ?>

  <body>

    <?php
      require("header_login.php");
      require("navbar_login.php");

    ?>

    <script type="text/javascript">

      function validacion() {

        img = document.getElementById("imgform").selectedIndex;
        name = document.getElementById("nameform").value;
        lastname = document.getElementById("lastnameform").value;
        mail = document.getElementById("mailform").value;
        username = document.getElementById("usernameform").value;
        password = document.getElementById("passform").value;



        if( img == null ) {
          return false;
        }

        if (name.length > 40) {
          alert("El nombre no debe contener más de 40 caracteres");
          return false;
        }

        if (lastname.length > 40) {
          alert("El apellido no debe contener más de 40 caracteres");
          return false;
        }

        if (mail.length > 50) {
          alert("El correo no debe contener más de 50 caracteres");
          return false;
        }

        if (username.length > 30 || username.length < 8) {
          alert("El nombre de usuario debe contener entre 8 y 30 caracteres");
          return false;
        }

        if (password.length > 30 || password.length < 8) {
          alert("La contraseña debe contener entre 8 y 30 caracteres");
          return false;
        }

        return true;

      }

    </script>

        <section id="cuerpo">

          <form id="registro" method="post" action="registration.php" onsubmit="return validacion();">
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
              <input id="nameform" class="items" type="text" name="name" value="" placeholder="Nombre" maxlength="40" required>
              <br>
              <input id="lastnameform" class="items" type="text" name="lastname" value="" placeholder="Apellidos" maxlength="40" required>
              <br>
              <input id="mailform" class="items" type="text" name="email" value="" placeholder="Correo electronico" maxlength="50" required>
              <br>
              <input id="usernameform" class="items" type="text" name="username" value="" placeholder="Nombre de usuario" maxlength="30" required>
              <br>
              <input id="passform" class="items" type="password" name="password" value="" placeholder="Contraseña" maxlength="30" required>
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
