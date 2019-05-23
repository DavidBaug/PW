<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages

if(!isset($_SESSION["username"])){

  require_once('recursos/header_login.html')


}



?>
