<?php

  public function altausuario()
  {
    if(isset($_POST['add'])) {

       $dbuser="x45925324";
       $dbpass="45925324";
       $dbhost="localhost";
       $db="db12345678_pw1819";
       $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);


       if(! $conn ) {
          die('Could not connect: ' . mysql_error());
       }

       if(! get_magic_quotes_gpc() ) {
          $username = addslashes ($_POST['username']);
          $name = addslashes ($_POST['name']);
          $lastname = addslashes ($_POST['lastname']);
          $mail = addslashes ($_POST['mail']);
          $passwd = addslashes ($_POST['passwd']);
       } else {
          $username = $_POST['username'];
          $name = $_POST['name'];
          $lastname = $_POST['lastname'];
          $mail = $_POST['mail'];
          $passwd = $_POST['passwd'];
       }
       // $ship_date = $_POST['ship_date'];
       $sql = "INSERT INTO usuario ".
          "VALUES"."('$username','$name','$lastname','$mail','$passwd')";

       mysql_select_db($db);
       $retval = mysql_query( $sql, $conn );

       if(! $retval ) {
          die('Could not enter data: ' . mysql_error());
       }

       echo "Entered data successfully\n";
       mysql_close($conn);
    }
  }

?>
