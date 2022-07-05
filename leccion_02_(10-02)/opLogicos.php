<?php
  /*
    && - and - Y
    || - or - O
    ! -not -no
  */

  if ($_POST){
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    if(($numero1 != $numero2) && ($numero1 > $numero2)){
      echo "El primer número es el mejor";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="opLogicos.php" method="post">
    <label for="numero1">Primer Número:</label>
    <input type="text" name="num1" id="numero1">
    <br>
    <label for="numero2">Segundo Número:</label>
    <input type="text" name="num2" id="numero2">
    <br>
    <input type="submit" value="Procesar">
  </form>
</body>
</html>