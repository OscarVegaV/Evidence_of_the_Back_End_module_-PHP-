<?php
/*
Rellene un array con 10 numeros enteros, una vez hecho esto muestre por pantalla el promedio de los números que se ubicaron en las posiciones pares del arreglo y cree una lista no numerada con los numeros que se ubican en las posiciones impares del arreglo
*/
$numenteros = array();
$suma = 0;
$promedio = 0;
$contador = 0;
echo "El arreglo contiene los siguientes numeros: ";
for ($i=0; $i < 10 ; $i++) {
  $numenteros[$i] = $i;
  if ($i%2 == 0) {
    $suma = $suma + $i;
    $contador = $contador + 1;
  }
}
echo "<br>";
print_r ($numenteros);
$promedio = $suma / $contador;
echo "<br>";
echo "Promedio de los numeros en las posiciones pares es: ".$promedio. "<br>";
echo "Lista no numerada de numeros impares: ";
echo "<ul>";
for ($i=1; $i < 10 ; $i+=2) {
  echo "<li>".$i."</li>";
}
echo "</ul>";
?>