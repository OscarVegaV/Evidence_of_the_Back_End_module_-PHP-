<!-- Desplegar por pantalla todos los números impares que existan entre 1 y N. N representa un número dado por el usuario. Además, al final mostrar por pantalla la suma de todos los números impares vistos. -->
<?php
  if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = 0;
    for ($i=1; $i < $valorA; $i++) { 
      echo "Numero ".$i++;
      echo "<br>";
      $valorB = $i++; //falta arreglar la suma
    }
    echo "La suma de los numeros impares son".$valorB;
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practica 04</title>
</head>
<body>
  <form action="practica_04.php" method="post"> <!-- metodo post-->
    <label for="num1">Escriba un número:</label>
    <input type="text" name="valorA" id="num1">
    <br>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>