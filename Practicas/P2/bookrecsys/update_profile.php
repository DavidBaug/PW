<?php

    require('db.php');

    $salir = 0;

    if(isset($_POST['username'])){
      $username = $_POST['username'];

      $old = $_SESSION["username"];


      $sql = "UPDATE usuario SET username = '$username' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          // $message = "Datos cambiados";
          // echo "<script type='text/javascript'>alert('$message');</script>";
          //
          // header("Location: ./index.php");
          $salir=1;

      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_POST['name'])){
      $name = $_POST['name'];

      $old = $_SESSION["username"];

      $sql = "UPDATE usuario SET name = '$name' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);


          // header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_POST['lastname'])){
      $lastname = $_POST['lastname'];

      $old = $_SESSION["username"];
      $sql = "UPDATE usuario SET lastname = '$lastname' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          // header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_POST['email'])){
      $email = $_POST['email'];

      $old = $_SESSION["username"];
      $sql = "UPDATE usuario SET mail = '$email' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);



          // header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    if(isset($_POST['password'])){
      $password = $_POST['password'];

      $old = $_SESSION["username"];
      $sql = "UPDATE usuario SET passwd = '$password' WHERE username = '$old';";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";
          // mysqli_close($conn);

          $salir=1;

          // header("Location: ./index.php");
      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";
          // mysqli_close($conn);

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";


          header("Location: ./datospersonales.php");
      }


    }

    // if(isset($_SESSION["img"]) && isset($_POST['img'])){
    //   $img = "imagenes/" . $_POST['img'] . ".png";
    //
    //   $old = $_SESSION["username"];
    //   $sql = "UPDATE usuario SET img = '$img' WHERE username = '$old';";
    //
    //   if (mysqli_query($conn, $sql)) {
    //       $_SESSION['error']= "0";
    //       // mysqli_close($conn);
    //
    //
    //       // header("Location: ./index.php");
    //   } else { // Si falla vuelta a registrar
    //       $_SESSION['error']= "1";
    //       // mysqli_close($conn);
    //
    //       $message = "Error en alta";
    //       echo "<script type='text/javascript'>alert('$message');</script>";
    //
    //
    //       header("Location: ./datospersonales.php");
    //   }
    //
    //
    // }

    $message = "Datos cambiados";
    echo "<script type='text/javascript'>alert('$message');</script>";

    // Datos cambiados - echamos a usuario
    mysqli_close($conn);

    if ($salir==1) {
      require("logout.php");
    }else{
      header("Location: ./datospersonales.php");
    }


?>
