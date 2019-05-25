<?php

    require('db.php');

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

          // Si no falla consulta vuelta a index
          if (mysqli_query($conn, $sql)) {
              $_SESSION['error']= "0";
              mysqli_close($conn);

              $message = "Alta correcta";
              echo "<script type='text/javascript'>alert('$message');</script>";

              header("Location: ./index.php");
          } else { // Si falla vuelta a registrar
              $_SESSION['error']= "1";
              mysqli_close($conn);

              $message = "Error en alta";
              echo "<script type='text/javascript'>alert('$message');</script>";


              header("Location: ./altausuario.php");
          }
        } else { //Si no has rellenado form vuelta a registrar
            $_SESSION['error']= "1";
            mysqli_close($conn);

            // $message = "Error en alta";
            // echo "<script type='text/javascript'>alert('$message');</script>";


            header("Location: ./altausuario.php");
        }
    } else { // Si ya hay sesión
        $_SESSION['error']= "1";
        mysqli_close($conn);

        $message = "Ya hay una sesión abierta";
        echo "<script type='text/javascript'>alert('$message');</script>";


        header("Location: ./index.php");
    }
?>
