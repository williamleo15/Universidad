<?php //Abre el codigo php
//Manda llamar la página phpmyadmin
$localhost="localhost";
//Nombre del usuario
$usuario="root";
//Contraseña
$pass="";
//Nombre de base de datos
$namebd="universidad_bd";
//Leer la inforación 
$conexion= mysql_connect($localhost, $namebd, $usuario, $pass);
mysql_select_db($conexion, $namebd);
//El comando echo nos ayuda a mostrar cualquier infromación
echo
//Cierra el codigo php
?>