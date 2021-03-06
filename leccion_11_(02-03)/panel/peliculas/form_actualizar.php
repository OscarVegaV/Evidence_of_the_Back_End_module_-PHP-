<?php
  session_start();
  if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) #si la session no fue creada aqui mismo o la session esta vacia ==> cargue el index
    header('Location: ../index.php');

  require '../../vendor/autoload.php';
  #isset revisa si la VAR fue creada en el mismo archivo o de otro lado
  if(isset($_GET['id']) &&  is_numeric($_GET['id'])){
  $id = $_GET['id'];
  $pelicula = new ina\Pelicula;
  $resultado = $pelicula->mostrarPorID($id);
  // print_r($resultado);
  // die; # para evitar que se ejecute el codigo despues de hay
  #si el resultado No fue hecho
  if(!$resultado)
    header('location: index.php');
  }else{
    header('location: index.php');
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
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
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
        <fieldset>
          <legend>Datos de la pelicula</legend>
          <form method="post" action="../acciones.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="" value="<?php print $resultado['id'] ?>"> <!-- hidden oculto-->
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <label for="titulo" class="input-group-text">titulo</label>
                  <input type="text" name="titulo" id="titulo" require class="form-control" value="<?php print $resultado['titulo'] ?>">
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group">
                  <label for="descripcion" class="input-group-text">Descripci??n</label>
                  <textarea name="descripcion" id="descripcion" cols="3" require class="form-control"><?php print $resultado['descripcion'] ?></textarea>                  
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group">
                  <label for="categorias" class="input-group-text">Categorias</label>
                  <select name="categoria_id" id="categorias" class="form-control">
                    <option value="">>--Seleccione--<</option>
                    <?php
                      require '../../vendor/autoload.php';
                      $categoria = new ina\Categoria;
                      $info_categoria = $categoria->mostrar();
                      $cantidad = count($info_categoria);
                      for($x=0;$x < $cantidad; $x++){
                        $item = $info_categoria[$x];
                    ?>
                    <!-- lo que va a salir en el select -->
                    <option value="<?php print $item['id'] ?>" <?php print $resultado['categoria_id']==$item['id']?'selected':''?>>
                      <?php print $item['nombre'] ?>
                    </option>
                    <?php
                      }
                    ?>
                  </select>                  
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <label for="Foto" class="input-group-text">Foto</label>
                  <input type="file" name="foto" id="foto" class="form-control">
                  <input type="hidden" name="foto_temp" value="<?php print $resultado['foto'] ?>">
                </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <label for="precio" class="input-group-text">Precio</label>
                  <input type="text" name="precio" id="precio" require class="form-control" placeholder="0.00" value="<?php print $resultado['precio'] ?>">
                </div>
              </div> 
            </div>
            <br>
            <input class="btn btn-success" type="submit" value="Actualizar" name="accion"></input>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
          </form>
        </fieldset>        
      </div>
    </div>
  </div>
    
  <!-- script js bootstrap -->
  <script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>