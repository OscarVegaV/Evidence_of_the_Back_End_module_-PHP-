<?php
$servidor = "localhost";//127.0.0.1
$usuario = "root";
$contraseña = "";
//try{}catch{}; equivalente al I F ==== E L S E
try{
  //new para trabajar con objetos y clases (clase PBO con conjunto de metodos para garantiz la CONEXION CON  la BD)
  $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contraseña);

  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //$sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'prueba de envio con SQL en PHP', 'paisaje.jpg');";
  // que se ubique en la tabla y muestre todos los datos 13-19
  $sql = "SELECT * FROM `fotos`";
  // var que se le asigna una var para poder utilizar el metodo new 
  $sentencia = $conexion->prepare($sql); //prepare(revisa la sentencia sql para prepararla para ejecutarla)
  // ejecuta la sentencia
  $sentencia->execute();
  //dentro de la var resul -> guarda lo que se genero de la sentencia SELECT
  $resultado = $sentencia->fetchAll();
  //ver una estructura prin_r
  print_r($resultado);
  echo "<br>***********************************************************************************************************************<br>";
  // otra forma de visualizar foto 
  foreach($resultado as $foto){
    print_r($foto);
    echo "<br>***********************************************************************************************************************<br>";

  }
  //echo "Conexión Establecida";
  $conexion->exec($sql);
}catch(PDOException $error){

  echo "Conexión NO establecida".$error;

}

?>