<?php
  $txtNombre="";
  //cuando la pagina cargue revisa si el metodo post hacer ...
  if($_POST) {
    //isset verifica si una variable fue definida dentro del PHP y guarda su VALOR
    //   [?] se usa para concatenar instrucciones [:] sino muestre en blanco (if(?) y else(:))
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <!-- se llamae este metodo post para que desde el principio no salga hola -->
  <?php if($_POST){?>
    <strong>Hola</strong>:<?php echo $txtNombre;?>
  <?php } ?>
  
  <form action="input_html.php" method="post">
    <input type="text" name="txtNombre" id="">
    <input type="submit" value="Enviar Información">
  </form>
</body>
</html>