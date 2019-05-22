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

    <header id="cabezera">
      <section class="login">
        <form method="post">
          <input class="items" type="text" name="username" value="" placeholder="Usuario" required>
          <br>
          <input class="items" type="password" name="password" value="" placeholder="Contraseña" required>
          <br>
          <button class="items" type="submit" name="login" formaction="index2.html">Acceder</button>
          <br>
          <p class="items">Si no tienes cuenta puedes registrarte <a href="altausuario.html">aquí</a></p>
        </form>
      </section>

        <section>
          <a href="index.html"><img class="logo" src="imagenes/libro_logo.png"></a>
        </section>

        <section class="titulo">
            <a href="index.html"><h1>BOOKSPLAT</h1></a>
        </section>


    </header>


    <nav id="navbar" class="nav_index">
      <input id="show" type="checkbox" name="" value="">
      <label id="ham" for="show"><i style="color:white;"class="fa fa-bars"></i></label>
      <form class="alert" method="post">
        <p>Login</p>
        <input class="items" type="text" name="username" value="" placeholder="Usuario" required>
        <br>
        <input class="items" type="password" name="password" value="" placeholder="Contraseña" required>
        <br>
        <button class="items" type="submit" name="login" formaction="index2.html">Acceder</button>
      </form>

      <ul class="menu">
        <li><a class="active" href="#">Registro</a></li>
      </ul>
    </nav>

    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

        <section id="cuerpo">

          <?php
          require('db.php');
          // If form submitted, insert values into the database.
          if (isset($_REQUEST['username'])){
                  // removes backslashes
          	$username = stripslashes($_REQUEST['username']);
                  //escapes special characters in a string
          	$username = mysqli_real_escape_string($con,$username);
          	$mail = stripslashes($_REQUEST['email']);
          	$mail = mysqli_real_escape_string($con,$email);
          	$passwd = stripslashes($_REQUEST['password']);
          	$passwd = mysqli_real_escape_string($con,$password);
          	$trn_date = date("Y-m-d H:i:s");
                  $query = "INSERT into `usuario` (username, name, lastname ,mail, passwd)
          VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                  $result = mysqli_query($con,$query);
                  if($result){
                      echo "<div class='form'>
          <h3>You are registered successfully.</h3>
          <br/>Click here to <a href='login.php'>Login</a></div>";
                  }
              }else{
          ?>


          <form id="registro" method="post" action="">
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
              <input class="items" type="text" name="mail" value="" placeholder="Correo electronico" required>
              <br>
              <input class="items" type="text" name="username" value="" placeholder="Nombre de usuario" required>
              <br>
              <input class="items" type="password" name="passwd" value="" placeholder="Contraseña" required>
              <br>
              <button class="botonregistro" type="submit" name="login">Registrarse</button>

            </section>

          </form>


          <?php } ?>



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
