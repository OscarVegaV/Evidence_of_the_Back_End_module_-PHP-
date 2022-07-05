<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){ //revisa atravez de la conexion servidor si hay respuesta
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];
    require '../vendor/autoload.php'; #se utiliza vendor es para poder usar el archivo que contiene la clase en vendor
    $usuario = new ina\Usuario;
    $resultado = $usuario->login($nombre_usuario,$clave); #si se ejecuto resultodo (correcto), inicia la session de Usuario_info y se crea un arreglo y si esta bien carga el daboard
    if($resultado){
      session_start();
      $_SESSION['usuario_info'] = array(
        'nombre_usuario'=> $resultado['nombre_usuario'],
        'estado'=>1
      ); 
      #si todo esta ok lo envia a dahshboard
      header('Location: dashboard.php');
      #si no esta bien da un mensaje de error
    }else{
      exit(json_encode(array('estado'=>FALSE,'mensaje'=>'Error al iniciar sesión')));
    }
  }
?>