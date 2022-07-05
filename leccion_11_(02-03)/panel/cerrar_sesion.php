<?php
  session_start(); #hala la sesion 
  $_SESSION['usuario_info'] = array(); #busque la sessin usuario info y asignele un arreglo vacio
  header('Location: index.php');
?>