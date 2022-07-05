<?php
  //Declaracion de funciones
  //***********************************************
  //Funcion sin Parametros
  function mostrarNombre(){ //muestra el resultado 1
    echo "Hola Mundo";
    echo "<br>";
  }
  //Funcion que recibe parametros // muestra el resultado
  function nombreParametros($nombre,$apellido=""){ // se puede inicializar un parametro en blanco para que no de error(L18)
    echo "Hola ".$nombre." ".$apellido;
    echo "<br>";
  }

  //funcion con retorno de valores       
  function calculaDatos($numero1,$numero2){           // no muestra el resultado
    $resultado = $numero1 + $numero2;
    return $resultado; //regresa el contenido de la var
  }

  //-- -- -- C ó d i g o -- -- -- P R I N C I P A L
  // llamado de funcion sin parametros
  mostrarNombre();

  //formas para llamar la funcion con parametros
  $v_nombre = "Juan";
  nombreParametros($v_nombre);
  //otra forma
  nombreParametros("Pedro","Perez");

  //parte de la funcion retorno de valores
  $num1 = 10;
  $num2 = 5;
  $muestraResultado = calculaDatos($num1,$num2);
  echo "El resultado de la suma es ".$muestraResultado;
  echo "<br>";
  $promedio = $muestraResultado / 2;
  echo "El Promedio de los números es ".$promedio;

?>