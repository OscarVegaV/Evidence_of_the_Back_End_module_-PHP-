<?php
  namespace ina;
  class Categoria{
    private $config;
    private $cn = null;
    public function __construct(){ // funcionn publica __construct() palabra reserbada
      $this->config = parse_ini_file(__DIR__.'/../config.ini');
      //print_r($this->config);   //para versi esta dando los resultados
      $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(\PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));//PDO coneccion interna de PHP con paramertros para conectar la Base de datosa || sepueda reconocer los caractrteres especiales utf8.
    }
    public function mostrar(){
      
      $sql = "SELECT * FROM categorias";
      $resultado = $this->cn->prepare($sql);
      
      if ($resultado->execute())
        return $resultado->fetchAll();
      return false;
    }
  }
?>