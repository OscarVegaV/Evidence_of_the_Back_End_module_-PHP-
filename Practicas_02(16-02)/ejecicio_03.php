<?php
/*
Cree un array con los siguientes nombres: Pedro, Ismael, Sonia, Clara, Susana, Alfonso y Teresa; utilizando una funcion para arreglos de PHP ,muestre cuantos elementos hay dentro del arreglo y luego muestre cada elemento del arreglo como un elemento de una lista no numerada*/

$nombres = array("Pedro","Ismael","Sonia","Clara","Susana","Alfonso","Teresa");

echo "El arreglo nombres contine: ";
echo count($nombres);
echo " elementos <br>";
// listas
echo "<ul>";
for ($i=0; $i < 7 ; $i++) {
  echo "<li>".$nombres[$i]."</li>";
}
echo "</ul>";

?>