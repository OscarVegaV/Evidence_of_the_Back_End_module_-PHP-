<!-- Realizar un algoritmo que permita alternar y mostrar por pantalla el “SI” y “NO”, un total de 10 veces, para cada uno. -->
<?php
  
  for($valorInicial=0; $valorInicial<10; $valorInicial++){// variable en 0; luego se define hasta cuando; y luego que sume en uno+
    echo "si ".$valorInicial;
    echo "<br>";
    for ($valorInicial2=0; $valorInicial2 < 1 ; $valorInicial2++) { //solo se ejecuta 1 vez por cada ciclo
      echo "no ".$valorInicial;
      echo "<br>";
    }
  }  
  echo "Valor final de la variable contadora ".$valorInicial
?>

