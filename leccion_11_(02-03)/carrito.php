<?php
  session_start();#mantiene la sesion abierta
  require 'funciones.php';
  #si por el metodo Get se envio un id y si es  numerico
  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    require 'vendor/autoload.php';
    $pelicula = new ina\Pelicula;
    $resultado = $pelicula->mostrarPorID($id);
    //si es diferente a resultado
    if(!$resultado) #este if no lleva {}
      header('Location: index.php');
      // print '<pre>';   
      // print_r($_SESSION['carrito']);

      // si el carrito existe 
    if(isset($_SESSION['carrito'])){
      #si la pelicula existe dentro del carrito
      if(array_key_exists($id,$_SESSION['carrito'])){ 
        actualizarPelicula($id);      
      }else{ //si la pelicula no existe dentro de carrito
      agregarPelicula($resultado,$id);
      }    
    }else{//si el carrito NO existe
      agregarPelicula($resultado,$id);
    }
    // print '<pre>';   # se utilizo par ver cuantas peliculas hay
    // print_r($_SESSION['carrito']);
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <!-- links bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- links style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-fixed-top navbar-expand-lg">
    <div class="container">
      <a href="index.php" class="navbar-brand">Kawschool Store</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav float-end ms-auto">
          <li class="nav-item">
            <a href="" class="btn text-white">Carrito <span class="badge bg-danger"><?php print cantidadPeliculas(); ?></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" id="main">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Pelicula</th>
        <th>Foto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
          $total = 0;
          $c = 0;
          foreach($_SESSION['carrito'] as $indice => $value){
            $c ++;
            $total = $value['precio'] * $value['cantidad'];
      ?>
      <form action="actualizar_carrito.php" method="post">      
          <tr>
            <td><?php print print $c ?></td>
            <td><?php print $value['titulo'] ?></td>
            <td>              
              <?php
                $foto = 'upload/'.$value['foto'];
                if(file_exists($foto)){
              ?>
              <img src="<?php print $foto; ?>" alt="" width="35px">
              <?php }
                else{
              ?>
              <img src="assets/img/error404.png" alt="" width="35px">
              <?php
                }
              ?>    
            </td>
            <td><?php print $value['precio'] ?></td>
            <td>
              <input type="hidden" name="id" value="<?php print $value['id'] ?>">
              <input type="text" name="cantidad"  class="form-control u-size-100" value="<?php print $value['cantidad'] ?>">
            </td>
            <td>
            <?php
              print $total
            ?>
            </td>
            <td>
              <button type="submit" class="btn btn-success">
                <i class="bi bi-arrow-clockwise"></i>
              </button>
              <a href="eliminar_carrito.php?id=<?php print $value['id'] ?>" class=" btn btn-danger">
                <i class="bi bi-trash"></i>
              </a>
            </td>
          </tr>
        </form>
      <?php
          }
        }else{
      ?>
        <tr>
          <td colspan="7">NO HAY PRODUCTOS EN EL CARRITO</td>
        </tr>
        <?php
        }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5" class="text-end">Total</td>
        <td colspan=""><?php print calcularTotal(); ?></td>
        <td></td>
      </tr>
    </tfoot>
  </table>
  <hr>
  <?php
    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
  ?>
  <div class="row">
    <div class="col">
      <a href="index.php" class="btn btn-info">Seguir Comprando</a>
    </div>
    <div class="col text-end">
      <a href="finalizar.php" class="btn btn-success">Finalizar Compra</a>
    </div>
  </div>
  <?php
    }  
  ?>
  </div>
  <!-- script js bootstrap -->
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>