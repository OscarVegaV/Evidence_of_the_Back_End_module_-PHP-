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
    <div class="main-form">
      <div class="row">
        <div class="col-md-12">
          <fieldset> <!--Nombre de pestana con el legend-->
            <legend>Completar Datos</legend>
            <form action="completar_pedido.php" method="post">
              <div class="input-group">
                <label for="nombre" class="input-group-text">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" require >
              </div>
              <div class="input-group">
                <label for="apellidos" class="input-group-text">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" require >
              </div>
              <div class="input-group">
                <label for="email" class="input-group-text">Correo:</label>
                <input type="email" name="email" id="email" class="form-control" require >
              </div>
              <div class="input-group">
                <label for="telefono" class="input-group-text">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" require >
              </div>
              <div class="input-group">
                <label for="comentario" class="input-group-text">Comentario:</label>
                <textarea name="comentario" id="comentario" class="form-control" require cols="30" rows="4"></textarea>
              </div>
              <br>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <!-- script js bootstrap -->
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>