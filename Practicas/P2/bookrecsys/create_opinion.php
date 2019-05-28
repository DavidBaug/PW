<?php

    require('db.php');

    $id = $_GET['id'];


    if(isset($_POST['opinion']) && isset($_POST['valoracion'])){

      $username = $_SESSION["username"];

      $opinion = $_POST['opinion'];
      $rating = $_POST['valoracion'];

      $sql = "INSERT INTO libro_valorado(id,username,opinion,rating) VALUES('$id', '$username', '$opinion', '$rating');";

      if (mysqli_query($conn, $sql)) {
          $_SESSION['error']= "0";


      } else { // Si falla vuelta a registrar
          $_SESSION['error']= "1";

          $message = "Error en alta";
          echo "<script type='text/javascript'>alert('$message');</script>";

          header("Location: ./valorar.php?id=$id");
      }
    }



    $message = "Opinión añadida";
    echo "<script type='text/javascript'>alert('$message');</script>";

    header("Location: ./mislibros.php");


    mysqli_close($conn);


?>
