<?php

  include 'db.php';

  if( (isset($_POST['username'])) and (isset($_POST['password']))){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM usuario WHERE username= '$username' AND passwd= '$password'";
      $result = mysqli_query($conn, $sql);
  }

  if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username']= $row["username"];
        $_SESSION['name']= $row["name"];
        $_SESSION['lastname']= $row["lastname"];
        $_SESSION['mail']= $row["mail"];
        $_SESSION['password']= $row["passwd"];

        echo "Conexión correcta";

    }
    else{
        $_SESSION['error']= "error";
    }
    mysqli_close($conn);
    header("Location: ./index.php");
?>
