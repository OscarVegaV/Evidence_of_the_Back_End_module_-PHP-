<!-- Realizar un algoritmo que pida N números de nombres. El proceso termina hasta que el usuario de una orden. -->
<?php
  if($_POST){
    $nombre = $_POST['name1'];   
    if ($nombre != "fin") {
      echo "siga intentando";   
    }
    else{
      echo "Proceso Terminado";  
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practica1</title>
</head>
<body>
<form action="practica_01.php" method="post">
    <label for="numero1">Escriba un Nombre:</label>
    <input type="text" name="name1" id="nombre">
    <p>Para terminar el proceso escriba fin</p>
    <br>
    <input type="submit" value="Procesar">
  </form>
</body>
</html>