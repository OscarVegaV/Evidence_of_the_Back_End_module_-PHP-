<?php
  // primero hace y luego pregunta
  $valorInicial = 0;                   // Declarar variable contadora
  
  $numero = 5;
  if ($numero>=5) {
    $valorInicial = 0;
  }else{
    $valorInicial = 10;
  }
  
  do{                                   // ejecuta las instrucciones
    echo "Número ".$valorInicial;
    echo "<br>";
    $valorInicial++;
  }while($valorInicial<10)              // pregunta
?>