<?php

  define("DB_DSN", "localhost");
  define("DB_NAME", "db45925324_pw1819");
  define("DB_USUARIO", "x45925324" );
  define("DB_CONTRASENIA", "45925324" );
  define("TABLA_USUARIO", "usuario" );
  define("TABLA_LIBRO", "libro" );
  define("TABLA_LIBRO_VALORADO", "libro_valorado" );

  $con = mysqli_connect(DB_DSN,DB_USUARIO,DB_CONTRASENIA,DB_NAME);

  // Check connection
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
