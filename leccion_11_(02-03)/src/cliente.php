<?php
//nombre general del proyecto
  namespace ina;
  class Cliente{
    private $config;
    private $cn = null;
    public function __construct(){ // funcionn publica __construct() palabra reserbada
      $this->config = parse_ini_file(__DIR__.'/../config.ini');
      //print_r($this->config);   //para versi esta dando los resultados
      $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(\PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));//PDO coneccion interna de PHP con paramertros para conectar la Base de datosa || sepueda reconocer los caractrteres especiales utf8.
    }
    public function registrar($_params){
      #se crea sentencia SQL
      $sql = "INSERT INTO `clientes`(`nombre`, `apellidos`, `email`, `telefono`, `comentario`) VALUES (:nombre,:apellidos,:email, :telefono,:comentario)";
      #asignacion
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se rellenan los campos
        ":nombre" => $_params['nombre'],
        ":apellidos"  => $_params['apellidos'],
        ":email" => $_params['email'],
        ":telefono" => $_params['telefono'],
        ":comentario" => $_params['comentario']
      );
      if ($resultado->execute($_array))
        return $this->cn->lastInsertId();#retorna el ultio ID que se agrego dentro de la tabla clientes
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;
      
    }
  }
?>
