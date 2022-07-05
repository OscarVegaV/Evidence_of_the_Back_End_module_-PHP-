<?php
//nombre general del proyecto
  namespace ina;
  class Pelicula{
    private $config;
    private $cn = null;
    public function __construct(){ // funcionn publica __construct() palabra reserbada
      $this->config = parse_ini_file(__DIR__.'/../config.ini');
      //print_r($this->config);   //para versi esta dando los resultados
      $this->cn = new \PDO($this->config['dns'],$this->config['usuario'],$this->config['clave'],array(\PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8'));//PDO coneccion interna de PHP con paramertros para conectar la Base de datosa || sepueda reconocer los caractrteres especiales utf8.
    }

    public function registrar($_params){
      #se crea sentencia SQL
      $sql = "INSERT INTO `peliculas`(`titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`) VALUES (:titulo,:descripcion,:foto,:precio,:categoria_id,:fecha)";
      #asignacion
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se rellenan los campos
        ":titulo" => $_params['titulo'],
        ":descripcion"  => $_params['descripcion'],
        ":foto" => $_params['foto'],
        ":precio" => $_params['precio'],
        ":categoria_id" => $_params['categoria_id'],
        ":fecha" => $_params['fecha']
      );
      if ($resultado->execute($_array))
        return true;
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;
      
    }
    public function actualizar($_params){ 
      #se crea sentencia SQL
      $sql = "UPDATE `peliculas` SET `titulo`= :titulo,`descripcion`= :descripcion,`foto`= :foto,`precio`= :precio,`categoria_id`= :categoria_id,`fecha`= :fecha WHERE `id`=:id";
      #asignacion
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se actualizan los campos
        ":titulo" => $_params['titulo'],
        ":descripcion"  => $_params['descripcion'],
        ":foto" => $_params['foto'],
        ":precio" => $_params['precio'],
        ":categoria_id" => $_params['categoria_id'],
        ":fecha" => $_params['fecha'],
        ":id" => $_params['id']
      );
      if ($resultado->execute($_array))
        return true;
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;      
    }
    public function eliminar($id){
      $sql = "DELETE FROM `peliculas` WHERE `id`=:id";
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        # asignacion se eliminar los campos      
        ":id" => $id
      );
      if ($resultado->execute($_array))
        return true;
        #asignacion , si la sentencia sql no fue ejecutada debuelve falso (else)
      return false;
    }
    public function mostrar(){
      
      $sql = "SELECT peliculas.id, titulo, descripcion, foto, nombre, precio, fecha, estado FROM peliculas
      INNER JOIN categorias
      ON peliculas.categoria_id = categorias.id ORDER BY peliculas.id DESC";
      $resultado = $this->cn->prepare($sql);
      
      if ($resultado->execute())
        return $resultado->fetchAll();
      return false;
    }
    public function mostrarPorID($id){
      $sql = "SELECT * FROM peliculas WHERE id = :id";
      $resultado = $this->cn->prepare($sql);
      $_array = array(
        ":id" => $id
      );
      if ($resultado->execute($_array))
        return $resultado->fetch();
      return false;
    }
  }
?>