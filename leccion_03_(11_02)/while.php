<?php
  $valorInicial = 0; // declarar variable fuera del ciclo

  $numero = 5;                    //para probar como funciona 4 y  5
  if ($numero>=5) {
    $valorInicial = 0;
  }else{
    $valorInicial = 10;
  }
        //  W h I L E
  while($valorInicial<10){            // pregunta primero y luego ejecuta
    echo "Número ".$valorInicial;
    echo "<br>";
    $valorInicial++;
  }
?>