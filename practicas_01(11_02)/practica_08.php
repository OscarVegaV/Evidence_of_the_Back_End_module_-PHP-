<!-- Leer números diferentes, tantos como el usuario desee. Si los números leídos son positivos (mayor a cero), se deben de sumar. Pero si los números son negativos, muestre un mensaje que diga “Numero no se Suma”. Si el usuario escribe un cero, el proceso se termina. Desplegar al final de todo el proceso la suma de todos los números sumados. -->
<?php
  if($_POST){
    $valorA[] = $_POST['valorA'];
    
    if($valorA > 0){

      $total = $valorA ;
      echo "el total de la suma es ".$total;
    }
    else{
      echo "los Números no se suman";
    }
    
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practica 08</title>
</head>
<body>
  <form action="practica_08.php" method="post"> <!-- metodo post-->
    <label for="num1">Escriba un número:</label>
    <input type="text" name="valorA" id="num1">
    <br>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>