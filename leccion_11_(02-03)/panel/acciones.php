<?php
// print "<pre>";#muestra el arreglo hacia abajo
// print_r($_POST);
// print_r($_FILES);
require '../vendor/autoload.php';
$pelicula = new ina\Pelicula; # se asigna a el llamado 
if($_SERVER['REQUEST_METHOD']==='POST'){
  if($_POST['accion']==='Registrar'){
    if(empty($_POST['titulo']))
      exit('completar titulo');
    if(empty($_POST['descripcion']))
      exit('completar Descripción');
    if(empty($_POST['categoria_id']))
    exit('Seleccione una categoria valida');
    if(!is_numeric($_POST['categoria_id']))
      exit('Seleccione una categoria valida');
    $_params = array(
      'titulo'=>$_POST['titulo'],
      'descripcion'=>$_POST['descripcion'],
      'foto'=> subirFoto(),
      'precio'=>$_POST['precio'],
      'categoria_id'=>$_POST['categoria_id'],
      'fecha'=> date('Y-m-d')
    );
    // var_dump($rpt); para revisar si es verdadero o falso
    $rpt = $pelicula->registrar($_params);
    if($rpt)
      header('location: peliculas/index.php');
    else
      print 'Error al registrar la pelicula';
  }
  if($_POST['accion']==='Actualizar'){
    if(empty($_POST['titulo']))
      exit('completar titulo');
    if(empty($_POST['descripcion']))
      exit('completar Descripción');
    if(empty($_POST['categoria_id']))
    exit('Seleccione una categoria valida');
    if(!is_numeric($_POST['categoria_id']))
      exit('Seleccione una categoria valida');
    $_params = array(
      'titulo'=>$_POST['titulo'],
      'descripcion'=>$_POST['descripcion'],
      'precio'=>$_POST['precio'],
      'categoria_id'=>$_POST['categoria_id'],
      'fecha'=> date('Y-m-d'),
      'id'=>$_POST['id']
    );
    #logica si ya tiene foto NO haga nada y si Agregan una nueva Cambiela
    if(!empty($_POST['foto_temp']))#si NO esta vacio 
      $_params['foto'] = $_POST['foto_temp'];
    if(!empty($_FILES['foto']['name']))#si NO esta vacio
      $_params['foto'] = subirFoto();
    // var_dump($rpt); para revisar si es verdadero o falso
    $rpt = $pelicula->actualizar($_params);
    if($rpt)
      header('Location: peliculas/index.php');
    else
      print 'Error al actualizar la pelicula';
  }
}
if($_SERVER['REQUEST_METHOD']==='GET'){
  $id = $_GET['id'];
  $rpt = $pelicula->eliminar($id);
  if($rpt)
    header('location: peliculas/index.php');
  else
    print 'Error al eliminar la pelicula';
}
function subirFoto(){
  $carpeta = __DIR__.'/../upload/';
  $archivo = $carpeta.$_FILES['foto']['name'];
  move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);
  return $_FILES['foto']['name'];
}
?>