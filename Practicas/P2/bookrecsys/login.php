<?php

require('db.php');

  $message = "Entrando a login";
  echo "<script type='text/javascript'>alert('$message');</script>";

  if( (isset($_POST['username'])) and (isset($_POST['password']))){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM usuario WHERE username= '$username' AND passwd= '$password'";
      $result = mysqli_query($conn, $sql);
  }

  if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username']= $row["username"];
        $_SESSION['name']= $row["name"];
        $_SESSION['lastname']= $row["lastname"];
        $_SESSION['mail']= $row["mail"];
        $_SESSION['password']= $row["passwd"];

        $message = "Usuario y contraseña correctos";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else{
        $_SESSION['error']= "error";

        $message = "Usuario y contraseña incorrectos";
        echo "<script type='text/javascript'>alert('$message');</script>";

    }
    mysqli_close($conn);
    header("Location: ./index.php");
?>
