<?php
if($_POST){
  print_r($_POST);
  print_r($_FILES['archivo']['name']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio de archivos</title>
</head>
<body>
  <!-- enctype para que soporte archivos -->
  <form action="input_archivo.php" method="post" enctype="multipart/form-data">
    <label for="imagen">Selecione imagen</label>
    <input type="file" id="imagen" name="archivo" >
    <br>
    <input type="submit" value="Enviar Información" name="enviar" >
  </form>
</body>
</html>