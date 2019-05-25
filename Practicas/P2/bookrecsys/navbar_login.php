<nav id="navbar" class="nav_index">
  <input id="show" type="checkbox" name="" value="">
  <label id="ham" for="show"><i style="color:white;"class="fa fa-bars"></i></label>
  <form class="alert" method="post">
    <p>Login</p>
    <input class="items" type="text" name="username" value="" placeholder="Usuario" required>
    <br>
    <input class="items" type="password" name="password" value="" placeholder="Contraseña" required>
    <br>
    <button class="items" type="submit" name="login" formaction="login.php">Acceder</button>
    <br>
    <!-- <button style="background: red;"class="items" type="submit" name="registrar" formaction="altausuario.php">Registrar</button> -->
  </form>

  <form class="alert" method="post">
    <button style="background: red;"class="items" type="submit" name="registrar" formaction="altausuario.php">Registrar</button>
  </form>

  <ul class="menu">
    <li><a class="active" href="#">Login</a></li>
  </ul>
</nav>
