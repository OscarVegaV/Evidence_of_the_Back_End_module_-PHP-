<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <!-- links bootstrap -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- links style CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Kawschool Store</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="navbar-toggler-icon"></span>
      </button>      
    </div>
  </nav>
  <div class="container" id="main">
    <div class="main-login">
      <form action="login.php" method="post">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Accesos al panel</h3>
          </div>
          <div class="card-body">
            <p class="text-center">
              <img src="../assets/img/logo.png" alt="">
            </p>
            <div class="input-group">
              <label for="usuario" class="input-group-text">Usuario</label>
              <input type="text" name="nombre_usuario" id="usuario" placeholder="Usuario" require class="form-control">
            </div>
            <div class="input-group">
              <label for="password" class="input-group-text">Password</label>
              <input type="password" name="clave" id="password" placeholder="Password" require class="form-control">
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-success btn-lg" type="submit">Login</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- script js bootstrap -->
  <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>