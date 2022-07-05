<?php
/*
  Crear un arreglo con indice númerico y otro con indice asociativo que contengan los siguientes valores: Madrid, Barcelona, Londres, New York, Los Angeles y Chicago; muestre por pantalla el contenido de ambos arreglos de tal forma que cada valor este en una linea distinta
*/
$ciudades = array("Madrid","Barcelona","Londres","New York","Los Angeles","Chicago");
$ciudadesAsociativos = array("M"=>"Madrid","B"=>"Barcelona","L"=>"Londres","N"=>"New York","A"=>"Los Angeles","C"=>"Chicago");

for ($i=0; $i < 6; $i++) { 
  echo $ciudades[$i];
  echo "<br>";
}
foreach ($ciudadesAsociativos as $indice => $valor){
  echo $indice."-".$valor."<br>";
}
?>