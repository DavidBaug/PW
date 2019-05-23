<?php

  define("DB_HOST", "localhost");
  define("DB_NAME", "db45925324_pw1819");
  define("DB_USUARIO", "x45925324" );
  define("DB_CONTRASENIA", "45925324" );
  define("TABLA_USUARIO", "usuario" );
  define("TABLA_LIBRO", "libro" );
  define("TABLA_LIBRO_VALORADO", "libro_valorado" );

  $conn = mysqli_connect(DB_HOST,DB_USUARIO,DB_CONTRASENIA,DB_NAME);

  if(!$conn ) {
      $_SESSION['error']= "1";
      header("Location: ./db.php");
  }
  else{
      session_start();
  }

?>
