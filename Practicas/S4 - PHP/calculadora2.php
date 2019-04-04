<?php

  $operando1;
  $operando2;

  $resultado;

  function calcula($op){
    $operando1 = $_GET['operando1'];
	  $operando2 = $_GET['operando2'];

    // if ($operando1 != NULL and $operando2 != NULL){
      if ($op == "suma"){
        $resultado = $operando1 + $operando2;
      }else if ($op == "resta"){
        $resultado = $operando1 - $operando2;
      }else if ($op == "multiplicacion"){
        $resultado = $operando1 * $operando2;
      }else if ($op == "division"){
        $resultado = $operando1 / $operando2;
      }
    // }else{
    //   $resultado = "No has escrito los operandos";
    // }

    echo($resultado);

  }

 ?>
