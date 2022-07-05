<?php
    include('db.php');
    $usuario = $_GET['usuarioNuevo'];
    $password = $_GET['passwordNuevo'];
    $rol = $_GET['rolNuevo'];

    $consulta = "INSERT INTO `personal`(`id`, `usuario`, `password`, `Rol`) VALUES (NULL, '$usuario', '$password', '$rol')";
    $resultado = mysqli_query($conexion, $consulta);

    include('index.html');
    ?>
        <h3>Usuario Creado Exitosamente</h3>
    <?php
?>