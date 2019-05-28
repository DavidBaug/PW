<?php

    require('db.php');

    $id = $_GET['id'];


    if($_POST['opinion']){

      $username = $_SESSION["username"];

      $opinion = $_POST['opinion'];
      $sql = "UPDATE libro_valorado SET opinion = '$opinion' WHERE username = '$username' and id='$id'";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";


      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./libroleido.php");
      }
    }

    if($_POST['valoracion']){

      $username = $_SESSION["username"];

      $rating = $_POST['valoracion'];
      $sql = "UPDATE libro_valorado SET rating = '$rating' WHERE username = '$username' and id='$id'";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";

      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./libroleido.php");
      }
    }

    $message = "Datos cambiados";
    echo "<script type='text/javascript'>alert('$message');</script>";

    header("Location: ./libroleido.php?id=$id");


    mysqli_close($conn);


?>
