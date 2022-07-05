<?php
//nombre general del proyecto
  namespace ina;
  class Pedido{
    private $config;
    private $cn = null;
    public function __construct(){ // funcionn publica __construct() palabra reserbada
      $this->config = parse_ini_file(__DIR__.'/../config.ini');
      //print_r($this->config);   //para versi esta dando los resultados
      $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(\PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));//PDO coneccion interna de PHP con paramertros para conectar la Base de datosa || sepueda reconocer los caractrteres especiales utf8.
    }
    public function registrar($_params){      
      #se crea sentencia SQL
      $sql = "INSERT INTO `pedidos`(`cliente_id`, `total`, `fecha`) VALUES (:cliente_id,:total,:fecha)";
      #asignacion
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se rellenan los campos
        ":cliente_id" => $_params['cliente_id'],
        ":total"  => $_params['total'],
        ":fecha" => $_params['fecha']
      );
      if ($resultado->execute($_array))
        return $this->cn->lastInsertId();#retorna el ultio ID que se agrego dentro de la tabla clientes
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;
      
    }
    public function registrarDetalle($_params){
      
      #se crea sentencia SQL
      $sql = "INSERT INTO `detalle_pedidos`(`pedido_id`, `pelicula_id`, `precio`, `cantidad`) VALUES (:pedido_id,:pelicula_id,:precio,:cantidad)";
      #asignacion
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se rellenan los campos
        ":pedido_id" => $_params['pedido_id'],
        ":pelicula_id" => $_params['pelicula_id'],
        ":precio" => $_params['precio'],
        ":cantidad" => $_params['cantidad']
      );  
      if ($resultado->execute($_array))
        return true; #retorna el ultio ID que se agrego dentro de la tabla clientes
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;      
    }
    // MUESTRA los PEDIDO que se GENERA cuando se hace una compra 
    #alias se genera con el nombre p pedidos = p clientes = c || toma los pedidos(id) busca(id) y devuelve los datos
    public function mostrar(){
      $sql = "SELECT p.id, nombre, apellidos, email, total, fecha FROM pedidos p INNER JOIN clientes c ON p.cliente_id = c.id ORDER BY p.id DESC";
      $resultado = $this->cn->prepare($sql);
        if($resultado->execute())
          return $resultado->fetchAll();#devuelve tosdo
        return false;
    }
    #alias se genera con el nombre p pedidos = p clientes = c || toma los pedidos(id) busca(id) y devuelve los datos
    public function mostrarUltimos(){
      $sql = "SELECT p.id, nombre, apellidos, email, total, fecha FROM pedidos p INNER JOIN clientes c ON p.cliente_id = c.id ORDER BY p.id DESC LIMIT 10";
      $resultado = $this->cn->prepare($sql);
        if($resultado->execute())
          return $resultado->fetchAll();#devuelve tosdo
        return false;
    }
    // 
    public function mostrarPorId($id){
      #alias se genera con el nombre p pedidos = p clientes = c 
      //toma todos los pedidos pero los muestra por id
      $sql = "SELECT p.id, nombre, apellidos, email, total, fecha FROM pedidos p INNER JOIN clientes c ON p.cliente_id = c.id WHERE p.id = :id";
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        ':id'=>$id
      );
      if($resultado->execute($_array))
        return $resultado->fetch();
      return false;
    }
    #alias se genera con el nombre dp = detalle_pedido pe = pelicula  
    // muestra el detalle de todas la peliculas que compro
    public function mostrarDetallePorIdPedido($id){
      $sql = "SELECT dp.id, pe.titulo, dp.precio, dp.cantidad, pe.foto FROM detalle_pedidos dp INNER JOIN peliculas pe ON pe.id = dp.pelicula_id WHERE dp.pedido_id = :id";
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        ':id'=>$id
      );
      if($resultado->execute($_array))
        return $resultado->fetchAll();
      return false;
    }
  }
?>
