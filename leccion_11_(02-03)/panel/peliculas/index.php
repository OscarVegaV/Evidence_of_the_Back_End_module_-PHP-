<?php
  session_start();
  if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) #si la session no fue creada aqui mismo o la session esta vacia ==> cargue el index
    header('Location: ../index.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <!-- links bootstrap -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- links style CSS -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-fixed-top navbar-expand-lg">
    <div class="container">
      <a href="../dashboard.php" class="navbar-brand">Kawschool Store</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav float-end ms-auto">
          <li class="nav-item">
            <a href="../pedidos/index.php" class="btn text-white nav-link">Pedidos</a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="btn text-white nav-link">Peliculas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php print $_SESSION['usuario_info']['nombre_usuario'] ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../cerrar_sesion.php">Salir</a></li>              
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" id="main">
    <div class="row">
      <div class="col-md-12">
        <div class="float-end">
          <a href="form_registrar.php" class="btn btn-primary"><span class="bi bi-plus-square-fill"></span> Nuevo</a>
        </div>
      </div>
    </div>    
    <div class="row">
      <col-md-12>
        <fieldset>
          <legend>Listado de Pelicualas</legend>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Categorias</th>
                <th>Precio</th>
                <th class="text-center">Foto</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              <?php
              require '../../vendor/autoload.php';
              $pelicula = new ina\Pelicula; 
              $info_pelicula = $pelicula->mostrar();
              $cantidad = count($info_pelicula);
              if($cantidad > 0){
                $c = 0;
                for($x =0; $x < $cantidad; $x++){
                  $c++;
                  $item = $info_pelicula[$x];
              ?>
              <tr>
                <td><?php print $c ?></td>
                <td><?php print $item['titulo'] ?></td>
                <td><?php print $item['nombre'] ?></td>
                <td><?php print $item['precio'] ?></td>
                <td class="text-center">
                  <?php
                    $foto = '../../upload/'.$item['foto'];
                    if(file_exists($foto)){
                  ?>
                  <img src="<?php print $foto; ?>" alt="" width="50px">
                  <?php
                    }else{
                  ?>
                  SIN FOTO
                  <?php
                    }
                  ?>  
                </td>
                <td class="text-center">
                  <a href="../acciones.php?id=<?php print $item['id'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a> <!--B O R R A R-->
                  <a href="form_actualizar.php?id=<?php print $item['id'] ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a><!--ACTUALIZAR-->
                </td>
              </tr>
              <?php
                }
              }else{
              ?>
              <tr>
                <td colspan="6">NO HAY REGISTROS </td>
              </tr>
              <?PHP
                }
              ?>
            </tbody>
          </table>
        </fieldset>
      </col-md-12>
    </div>
  </div>    
  <!-- script js bootstrap -->
  <script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>