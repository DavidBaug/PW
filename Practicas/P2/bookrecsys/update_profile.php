<?php

    require('db.php');

    // if(isset($_SESSION["username"])  && $_POST['username']){
    //   $username = $_POST['username'];
    //
    //   $old = isset($_SESSION["username"]);
    //
    //   $sql = "SELECT * FROM usuario WHERE username='$username';";
    //
    //   $result = mysqli_query($conn, $sql);
    //
    //   if (mysqli_num_rows($result) == 0) {
    //     $sql = "UPDATE usuario SET username = '$username' WHERE username = '$old';";
    //
    //     if (mysqli_query($conn, $sql)) {
    //         $_SESSION['error']= "0";
    //         // mysqli_close($conn);
    //
    //         $message = "Alta correcta";
    //         echo "<script type='text/javascript'>alert('$message');</script>";
    //
    //         header("Location: ./index.php");
    //     } else { // Si falla vuelta a registrar
    //         $_SESSION['error']= "1";
    //         // mysqli_close($conn);
    //
    //         $message = "Error en alta";
    //         echo "<script type='text/javascript'>alert('$message');</script>";
    //
    //
    //         header("Location: ./datospersonales.php");
    //     }
    //
    //   }
    // }

    if(isset($_SESSION["name"]) && $_POST['name']){
      $name = $_POST['name'];

      $old = isset($_SESSION["username"]);

      $sql = "UPDATE usuario SET name = '$name' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          $message = "Alta correcta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_SESSION["lastname"]) && $_POST['lastname']){
      $lastname = $_POST['lastname'];

      $old = isset($_SESSION["username"]);

      $sql = "UPDATE usuario SET lastname = '$lastname' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          $message = "Alta correcta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_SESSION["mail"]) && $_POST['email']){
      $email = $_POST['email'];

      $old = isset($_SESSION["username"]);

      $sql = "UPDATE usuario SET mail = '$email' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          $message = "Alta correcta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_SESSION["password"]) && $_POST['password']){
      $email = $_POST['password'];

      $old = isset($_SESSION["username"]);

      $sql = "UPDATE usuario SET passwd = '$password' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          $message = "Alta correcta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    mysqli_close($conn);

?>
