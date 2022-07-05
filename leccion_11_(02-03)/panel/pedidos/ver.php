<?php
  session_start();
  if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) #si la session no fue creada aqui mismo o la session esta vacia ==> cargue el index
    header('Location: ../index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
            <a href="index.php" class="btn text-white nav-link">Pedidos</a>
          </li>
          <li class="nav-item">
            <a href="../peliculas/index.php" class="btn text-white nav-link">Peliculas</a>
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
        <fieldset>
          <?php
            require '../../vendor/autoload.php';
            $id = $_GET['id'];
            $pedido = new ina\Pedido;
            $info_pedido = $pedido->mostrarPorId($id);
            $info_detalle_pedido = $pedido->mostrarDetallePorIdPedido($id);
          ?>
          <legend>Información de la Compra</legend>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" readonly value="<?php print $info_pedido['nombre'] ?>" id="nombre">
          </div>
          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos:</label>
            <input type="text" class="form-control" readonly value="<?php print $info_pedido['apellidos'] ?>" id="apellidos">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" readonly value="<?php print $info_pedido['email'] ?>" id="email">
          </div>
          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="text" class="form-control" readonly value="<?php print $info_pedido['fecha'] ?>" id="fecha">
          </div>
          <hr>
            Productos Comprados
          <hr>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Foto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php                
                $cantidad = count($info_detalle_pedido);
                if($cantidad > 0){
                $c = 0;
                for($x =0; $x < $cantidad; $x++){
                  $c++;
                  $item = $info_detalle_pedido[$x];
                  $total = $item['precio'] * $item['cantidad'];
              ?>
              <tr>
                <td><?php print $c ?></td>                
                <td><?php print $item['titulo'] ?></td>
                <td>
                  <?php $foto = '../../upload/'.$item['foto'];
                    if(file_exists($foto)){    
                  ?>
                  <img src="<?php print $foto; ?>" alt="" width="35">
                  <?php
                    }else{
                  ?>
                  SIN FOTO
                  <?php 
                    }
                  ?>
                </td>
                <td><?php print $item['precio'] ?></td>
                <td><?php print $item['cantidad'] ?></td>
                <td>
                <?php print $total ?>
                </td>
              </tr>
              <?php
                }    
                }else{
              ?>
              <tr>
                <td colspan="6">NO HAY REGISTROS</td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </fieldset>    
      </div>
    </div>
    <div class="row justify-content-end">
      <div class="col-2 mb-3">
        <label for="total" class="form-label">Total de la Compra: </label>
        <input type="text" class="form-control" readonly value="<?php print $info_pedido['total'] ?>" id="total">
      </div>
    </div>
    <hr>
    <div class="row justify-content-between">
      <div class="col-md-2">
        <a href="index.php" class="btn btn-secondary">Regresar</a>
      </div>
      <!--imprimir el documento-->
      <div class="col-md-2">
        <a href="javascript:window.print()" id="btnImprimir" class="btn btn-primary d-print-none">Imprimir</a>
      </div>
    </div>
  </div>
  <script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>