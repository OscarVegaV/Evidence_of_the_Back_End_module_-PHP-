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
    </div>
  </nav>
  <div class="container" id="main">
  <div class="row py-lg-5 text-center">
    <div class="col-md-8 col-lg-6 mx-auto">
      <h1 class="fw-light">Muchas Gracias</h1>
      <p class="lead text-muted">Le esperamos pronto para una nueva compra</p>
      <p>
        <a href="index.php" class="btn btn-primary my-2">Regresar</a>
      </p>
    </div>

</div>
  </div>
  <!-- script js bootstrap -->
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>