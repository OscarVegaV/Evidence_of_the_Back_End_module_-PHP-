<?php
//inicia cecion y en un par de variables el usuario y contrasena ESTO PERMITE PASARSE DE UN HTML A OTRO SIN PERDER LA CONEXION DE INICIO DE SECION
  session_start();
  //echo "la sesion sigue funcionando".":<br>";
  //isset extrae la informacion de una variable
  if (isset($_SESSION["usuario"])) {
  //si es verdadero poner
    echo "Usuario: ".$_SESSION["usuario"]."<br>estatus: ".$_SESSION["estatus"];
  }else{
    echo"<h1 style='color:blue;'>No existen datos, no hay sesión abierta</h1>";
  }


?>