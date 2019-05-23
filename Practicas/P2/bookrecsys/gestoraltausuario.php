<?php

    require_once('db.php');

    // Si no sesion
    if(!isset($_SESSION["username"])){
        if((isset($_POST['name'])) && (isset($_POST['lastname'])) && (isset($_POST['email'])) && (isset($_POST['password']))){
          // Conseguir datos y registrar usuario
          $username = $_POST['username'];
          $name = $_POST['name'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $sql = "INSERT INTO usuario VALUES( '$username', '$name', '$lastname', '$email', '$password');";

          if (mysqli_query($conn, $sql)) {
              $_SESSION['error']= "0";
              mysqli_close($conn);

              header("Location: ./index.php");
          } else {
              $_SESSION['error']= "1";
              mysqli_close($conn);

              header("Location: ./gestoraltausuario.php");
          }
        } else {
            $_SESSION['error']= "1";
            mysqli_close($conn);

            header("Location: ./gestoraltausuario.php");
        }
    } else {
        $_SESSION['error']= "1";
        mysqli_close($conn);

        header("Location: ./gestoraltausuario.php");
    }
?>
