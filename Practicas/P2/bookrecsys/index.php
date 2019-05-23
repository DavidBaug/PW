<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

if(!isset($_SESSION["username"])){
  require('header_login.php');
  require('navbar_login.html');
  require('html/index.html');
  require('footer.html');


}else {
  require('header.php');
  require('navbar.html');
  require('html/index.html');
  require('footer.html');
}



?>
