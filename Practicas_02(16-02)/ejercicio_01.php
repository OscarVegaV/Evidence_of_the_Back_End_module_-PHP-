<?php
/*
Almacene en un array los 10 primeros números pares, luego muestra cada valor en una linea distinta
*/
$arregloPares = array(); // cuando se crea el arreglo()
$valor = 0;
for ($i=0; $i < 10; $i++) { 
  $arregloPares[$i] = $valor; //para posicionarse[]
  $valor+=2;
  echo $i."-".$arregloPares[$i]."<br>";
}
?>