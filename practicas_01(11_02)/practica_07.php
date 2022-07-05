<!-- Leer la edad de una de una persona y mostrar por pantalla si la misma es niño si tiene menos o igual de 12 años, adolescente si tiene entre 13 y 17 años. Joven si tiene entre 18 y 30 años, adulto entre 31 y 64 y si tiene 65 o más adulto mayor. -->
<?php
  if($_POST){
    $edad = $_POST['valorA'];

    if (($edad >= 0) && ($edad <= 130)){
      if ($edad >= 65 ){
        echo "es un Adulto mayor";
        }
      if (($edad >= 31) && ($edad <= 64)){
        echo "es un Adulto";
      }
      if (($edad >= 18) && ($edad <= 30)){
        echo "es un Joven";
      }
      if (($edad >= 13) && ($edad <= 17)){
        echo "es un adolecente";
      }
      else{
        echo "usted es un pichon";
      }  
    }
    else{
      echo "la edad es incorrecta";
    }
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
  <form action="practica_07.php" method="post"> <!-- metodo post-->
    <label for="num1">Escriba su edad:</label>
    <input type="text" name="valorA" id="num1">
    <br>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>