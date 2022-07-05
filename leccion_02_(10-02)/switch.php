<?php
  if ($_POST) {
    $boton = $_POST['btnValor'];
    switch ($boton) {
      case '1':
        echo "Presiono el número 1";
        break;
      case '2':
        echo "Presiono el número 2";
        break;  
      case '3':
        echo "Presiono el número 3";
        break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>switch</title>
</head>
<body>
  <form action="switch.php" method="post">
    <input type="submit" value="1" name="btnValor">
    <input type="submit" value="2" name="btnValor">
    <input type="submit" value="3" name="btnValor">
  </form>
</body>
</html>