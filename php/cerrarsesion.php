<?php
session_start();

//Destruir la sesión abiert con la base de datos
session_destroy();

//Manda a la página inicial
header("Location:../html/inicio.html");

//Salir
exit();
?>