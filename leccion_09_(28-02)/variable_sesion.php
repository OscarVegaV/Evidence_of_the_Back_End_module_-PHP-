<?php
//inicia cecion y en un par de variables el usuario y contrasena ESTO PERMITE PASARSE DE UN HTML A OTRO SIN PERDER LA CONEXION DE INICIO DE SECION
  session_start();
  $_SESSION["usuario"]="weblossantos";
  $_SESSION["estatus"]="logueado";
  echo "Sesion iniciada".":<br>";
  echo "Usuario: ".$_SESSION["usuario"]."<br>estatus: ".$_SESSION["estatus"];
?>