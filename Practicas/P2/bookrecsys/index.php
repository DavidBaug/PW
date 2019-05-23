<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

if(!isset($_SESSION["username"])){
  require('head.php');
  require('header_login.php');
  require('navbar_login.php');
  require('html/index.html');
  require('footer.php');


}else {
  echo "conectado";
  require('head.php');
  require('header.php');
  require('navbar.php');
  require('html/index.html');
  require('footer.php');
}



?>
