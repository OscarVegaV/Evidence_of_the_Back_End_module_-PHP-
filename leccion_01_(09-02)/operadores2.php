<?php
  // si se da metodo POST en mayus en php
  if($_POST){
    // se le asigna en una var lo que tiene el metodo post con valor
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
   // operadores relacional  
    /*
    mayor que >
    menor que <
    mayoro igual >=
    menor o igual <=
    igual ==
    diferente !=
     */
    if($valorA > $valorB){
      echo "El primer valor es mayor al segundo";
    }
    else{
      echo "El segundo valor es mayor al primero";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>operadores relacional</title>
</head>
<body>
  <form action="operadores2.php" method="post"> <!-- metodo post-->
    <label for="num1">valor A:</label>
    <input type="text" name="valorA" id="num1">
    <br>
    <label for="num1">valor b:</label>
    <input type="text" name="valorB" id="num2">
    <br>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>