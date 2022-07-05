<?php
//Declaracion de un arreglo
$frutas = array("Fresas","Peras","Manzanas");

//muestra en pantalla ciertos valores logicos(print_r)
print_r($frutas);
echo "<br><hr>";

// muestra con warning
//echo $frutas;

//arreglo asociativo
$animales = array("p"=>"perros","g"=>"gatos","c"=>"caballo");
print_r($animales);
echo "<br>";
echo $animales["g"];
echo "<br><hr>";

// recorrer un arreglo casi siempre con for
echo "se muestra el contenido del arreglo frutas <br>";
for ($i=0; $i < 3; $i++) { 
  echo $frutas[$i]."<br>";
}
echo "<br><hr>";

//recorrer un arreglo con indice asociativo foreach
echo "Se muestra el contenido del arreglo animales <br>";
// para cada elemento de animales &=> lo que se va a asociar dentro del elemento de la lista
foreach($animales as $indice=>&$valor){ 
  // muestreme lo que tiene el indice y su valor
  echo $indice."-".$valor."<br>";
}