<?php
    include('db.php');
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $consulta = "SELECT * FROM personal WHERE usuario='$usuario' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if($filas){
        if($rol == "administrador"){
            include("Administrador.html");
        }
        else{
            include("Usuario.html");
        }
    }else{
        include("index.html");
        ?>
            <h1>ERROR DE AUTENTICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>