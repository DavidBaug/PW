<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php
  require('db.php');
  require('head.php');

  if(!isset($_SESSION["username"])){
    require('header_login.php');
    require('getlibro.php');

  }else{
    require('header.php');
    require('getlibro.php');


  }

require("footer.php");

echo'
  </body>

</html>';
