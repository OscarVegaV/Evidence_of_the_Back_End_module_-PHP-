<?php
  include('db.php');//carga dentro del archivo
  $usuario = $_POST['usuario'];
  $pasword = $_POST['password'];
  $consulta = "SELECT * FROM personal WHERE usuario='$usuario' AND password='$pasword'";
  //revisa el primer dato que se obtenga atravez de la conexion(db.php) atravez de la consulta(Lin 5) Y GUARDA EL PRIMER VALOR
  $resultado = mysqli_query($conexion, $consulta);//mysqli_query — Realiza una consulta a la base de datos
  //da la cantidad de filas que se obtubieron de la consulta($resultado)
  $filas = mysqli_num_rows($resultado);
  //if revisala condicion
  if ($filas) { 
    //valla a la direccion HOME
    header("location:home.html"); 
  }else{
    // de lo contrario carque aqui el archivo INDEX
    include("index.html");
    //AGREGAR UNA ETIQUETA PHP ALRVEZ - MANDAR UNA INFORMACION AL CONTRARIO 
    ?>         
    <h1>ERROR DE AUTENTICACION</h1>
    <?PHP
  }
  //libera la memoria despues de obtener el resultado que consume RAM
  mysqli_free_result($resultado);
  //cierra la conexion a la  base de datos
  mysqli_close($conexion);

?>