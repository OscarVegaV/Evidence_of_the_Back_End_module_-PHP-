<?php
/*
Implemente un array asociativo con los sgts valores:
Barcelona=>Camp Nou
Real Madrid=>Santiago Bernabeu
Valencia=>Mestalla
Real Sociedad=>Anoeta
una vez creado el arreglo muestre el contenido del mismo (indice y valor) dentro de una tabla.
elimine el valor del arreglo correspondiente al Real Madrid (investigue el uso de unset() para hacer este punto)
una vez eliminado el el valor del arreglo  muestra el nuevo contenido (indice y valor) por medio de una lista numerada
*/
$equiposAsociativos = array("Barcelona"=>"Camp Nou","Real Madrid"=>"Santiago Bernabeu","Valencia"=>"Mestalla","Real Sociedad"=>"Anoeta",);
echo "<table border>";
echo "<tr style='color:blue;'> <th>Equipos</th><th>Estadios </th> </tr>";
foreach ($equiposAsociativos as $indice=>&$valor){
  echo "<tr><th>".$indice."</th><th>".$valor."</th></tr>";
}
echo "</table>";
echo "<hr>";
// usent
//borrando un elemento especifico en una lista
echo "<p  style='color:tomato;'> <b>sin el Real Madrid</b></p> ";
echo "<ol>";
unset($equiposAsociativos["Real Madrid"]);
foreach ($equiposAsociativos as $indice=>&$valor){
  echo "<li>".$indice."-".$valor."</li>";
}
echo "</ol>";
echo "<hr>"
?>