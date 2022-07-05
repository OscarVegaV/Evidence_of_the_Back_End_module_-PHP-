<?php
  $txtNombre="";
  $rb_lenguaje="";
  #variables para los chkbox
  $chkphp="";
  $chkhtml="";
  $chkcss="";
  //variable para select 
  $anime = "";
  #variable text area
  $txtComentario = "";
  //cuando la pagina cargue revisa si el metodo post hacer ...
  if($_POST) {
    //isset verifica si una variable fue definida dentro del PHP y guarda su VALOR
    //   [?] se usa para concatenar instrucciones [:] sino muestre en blanco (if(?) y else(:))
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rb_lenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    #variable par ckbox
    $chkphp =(isset($_POST['chkphp'])=="php")?$_POST['chkphp']:"";
    $chkhtml =(isset($_POST['chkhtml'])=="html")?$_POST['chkhtml']:"";
    $chkcss =(isset($_POST['chkcss'])=="css")?$_POST['chkcss']:"";
    //variable para el  select (una lista con varios elementos)
    $anime = (isset($_POST['anime']))?$_POST['anime']:"";
    #variable para text area
    $txtComentario = (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
    // lo que se muestra en HTML
    echo "Datos enviados por metodo POST <br> ";
    print_r($_POST);
    echo "<br>********************************<br>";
    echo "<br> Dato almacenado en variable <br>";
    print_r($rb_lenguaje);
    echo "<br>";
    echo "********************************<br>";
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
  <hr>  
  <form action="radio.php" method="post">
    <label for="nombre">Digite su nombre</label>
    <input type="text" name="txtNombre" id="nombre">
    <br>
    ¿Te gusta?
    <br>
    <!-- nombres iguales -->
    <!-- php:    <input type="radio" checked name="lenguaje" id="" value="php"><br> cheket opcion preleccionada  -->
    php:    <input type="radio" <?php echo ($rb_lenguaje=="php")?"checked":"";?>  name="lenguaje" id="" value="php"><br>
    <!-- html:    <input type="radio" name="lenguaje" id="" value="html"><br>-->
    html:    <input type="radio" <?php echo ($rb_lenguaje=="html")?"checked":"";?> name="lenguaje" id="" value="html"><br>
    <!-- css:    <input type="radio" name="lenguaje" id="" value="css"><br>  -->
    css:    <input type="radio" <?php echo ($rb_lenguaje=="css")?"checked":"";?> name="lenguaje" id="" value="css"><br>
    <br>
    Estas aprendiendo...
    <br>
    <!-- cheksbox llevan un nombre por separado -->
    php: <input type="checkbox" name="chkphp" id="" value="php"><br>
    html: <input type="checkbox" name="chkhtml" id="" value="html"><br>
    css: <input type="checkbox" name="chkcss" id="" value="css"><br>
    ¿Que anime te gusta?
    <br>
    <!-- select  -->
    <select name="anime" id="">
      <option value="">Ninguno</option>
      <option value="naruto">Naruto</option>
      <option value="bleach">Bleach</option>
      <option value="dragon">Dragon Ball</option>
    </select>
    <br>
    ¿Tienes alguna duda?
    <br>
    <!-- area de texto -->
    <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
    <br>
    <!-- BOTON DE ENVIAR -->
    <input type="submit" value="Enviar Información">
  </form>
  <hr>
  <p>
    <h1>Datos seleccionados</h1>
    <!-- se llamae este metodo post para que desde el principio no salga hola -->
    <?php if($_POST){?>
      <strong>Hola: </strong><?php echo $txtNombre."<br>";?>
      <strong>Tu lenguaje es: </strong><?php echo $rb_lenguaje."<br>";?>
      <!-- CHKBOX -->
      <strong >lo que estas aprendiendo  es: </strong><?php echo $chkphp." ".$chkhtml." ".$chkcss;?><br>
      <!-- select -->
      <strong>Tu anime favorito es: </strong><?php echo $anime."<br>";?>
      <!-- text area -->
      <strong>Tu comentario es: </strong><?php echo $txtComentario."<br>"?>
    <?php } ?>
  </p>
</body>
</html>
<!--  -->