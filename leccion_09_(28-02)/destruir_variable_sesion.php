<?php
// inicia la session
session_start();
//para cerrar seccion la seccion debe estar iniciada
session_destroy();
echo"<h1 style='color:tomato;'>Se Cerro la sesión de usuario</h1>"
?>