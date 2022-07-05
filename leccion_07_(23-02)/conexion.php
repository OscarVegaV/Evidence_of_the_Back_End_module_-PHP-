<?php
$servidor = "localhost";//127.0.0.1
$usuario = "root";
$contraseña = "";

//try{}catch{}; equivalente al I F ==== E L S E
try{
//new para trabajar con objetos y clases (clase PBO con conjunto de metodos para garantiz la CONEXION CON  la BD)
  $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contraseña);

  $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'prueba de envio con SQL en PHP', 'paisaje.jpg');";
  echo "Conexión Establecida";
  $conexion->exec($sql);
}catch(PDOException $error){

  echo "Conexión NO establecida".$error;

}

// // C O N E X I O N  con 000webhost 

// $servername = "localhost";
// $username = "id17849379_osca0000";
// $password = "1BFdFzv3YxKKS^^@";
// $database = "id17849379_id_prueba1";S

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "acachete"; 
//     } catch(PDOException $e) {    
//     echo "conexion fallida ovv: " . $e->getMessage();
//     }
// ?>
?> 