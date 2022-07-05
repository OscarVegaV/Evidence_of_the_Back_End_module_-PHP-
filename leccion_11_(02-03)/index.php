<?php
  session_start();
  require 'funciones.php';
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
            <a href="carrito.php" class="btn text-white">Carrito <span class="badge bg-danger"><?php print cantidadPeliculas(); ?></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" id="main">
    <div class="row">
      <?php
        #Crea una conexion dentro de 
        require 'vendor/autoload.php';
        $pelicula = new ina\Pelicula; #conexion dentro el area INA y clase pelicula (pelicul.php)
        $info_peliculas = $pelicula->mostrar();#llamado de la funcion mostrar(pelicula.php)
        $cantidad = count($info_peliculas);
        if($cantidad > 0){
          for($x=0;$x < $cantidad; $x++){
            $item = $info_peliculas[$x];
      ?>
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center titulo-pelicula"><?php print $item['titulo'] ?></h1>
          </div>
          <div class="card-body">
            <!-- muestra las imagenes dentro del body y si muerstra un error -->
            <?php
              $foto = 'upload/'.$item['foto'];
              if(file_exists($foto)){
            ?>
            <img src="<?php print $foto; ?>" alt="" class="card-img-top">
            <?php }
              else{
            ?>
            <img src="assets/img/error404.png" alt="">
            <?php
              }
            ?>
          </div>
          <div class="card-footer d-grid">
            <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn-success"><span><i class="bi bi-cart3"></i></span> Comprar</a>
          </div>
        </div>
      </div>
      <?php
          }
        }else{
      ?>
        <h4>NO HAY REGISTROS</h4>
      <?php
        }
      ?>
    </div>
  </div>
  <!-- script js bootstrap -->
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>