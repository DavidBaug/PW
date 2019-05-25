<?php

    require('db.php');

    if(isset($_SESSION["username"])){
        if(isset($_POST['titulo']) && (isset($_POST['autor'])) && (isset($_POST['editorial']))
        && (isset($_POST['anio'])) && (isset($_POST['editor'])) && (isset($_POST['descripcion']))
        && (isset($_POST['opinion'])) && (isset($_POST['valoracion']))){
          // Conseguir datos y registrar libros

          $title = $_POST['titulo'];
          $autor = $_POST['autor'];
          $editorial = $_POST['editorial'];
          $anio = $_POST['anio'];
          $editor = $_POST['editor'];
          $descripcion = $_POST['descripcion'];

          $opinion = $_POST['opinion'];
          $valoracion = $_POST['valoracion'];

          $username = $_SESSION['username'];

          $sql = "INSERT INTO libro(id,title,autor,editorial,year,editor,description,img) VALUES(DEFAULT,'$title', '$autor', '$editorial', '$anio', '$editor','$descripcion', NULL);";


          // Si no falla consulta vuelta a index
          if (mysqli_query($conn, $sql)) {

              $message = "Libro creado correctamente";
              echo "<script type='text/javascript'>alert('$message');</script>";

              $sql = "SELECT id FROM libro where title='$title';";

              $result =  mysqli_query($conn, $sql);

              $row = mysqli_fetch_assoc($result);

              $id = $row["id"];

              $sql = "INSERT INTO libro_valorado(id,username,opinion,rating) VALUES('$id', '$username', '$opinion', '$valoracion');";

              if (mysqli_query($conn, $sql)) {
                $_SESSION['error']= "0";
                mysqli_close($conn);

                $message = "Opinion creada correctamente";
                echo "<script type='text/javascript'>alert('$message');</script>";

                header("Location: ./mislibros.php");

              }else { // Si falla vuelta a registrar
                  $_SESSION['error']= "1";
                  mysqli_close($conn);

                  $message = "Error en alta opinion";
                  echo "<script type='text/javascript'>alert('$message');</script>";


                  header("Location: ./index.php");
              }

            } else { // Si falla vuelta a registrar
              $_SESSION['error']= "1";
              mysqli_close($conn);

              $message = "Error en alta libro";
              echo "<script type='text/javascript'>alert('$message');</script>";


              header("Location: ./altalibro.php");
          }
        } else { //Si no has rellenado form vuelta a registrar
            $_SESSION['error']= "1";
            mysqli_close($conn);

            $message = "Error en alta";
            echo "<script type='text/javascript'>alert('$message');</script>";


            header("Location: ./altalibro.php");
        }
    } else { // Si no hay sesion
        $_SESSION['error']= "1";
        mysqli_close($conn);

        $message = "No hay sesión abierta";
        echo "<script type='text/javascript'>alert('$message');</script>";


        header("Location: ./index.php");
    }
?>
