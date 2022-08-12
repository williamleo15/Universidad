<?php
//Indica la conexión de la base de datos de la página ConexiónBD.php
require "ConexiónBD.php";

//La función session_start sirve para iniciar sesión 
session_start();

//Crea un variable para leer la información de los inputs.
$usuario = $_POST['txt_usuario'];
$password = $_POST['txt_password'];

//Utilizar instrucción sql para ejecutarlo en la base de datos.
$validar_infomracion = mysql_querty(
    $conexion, "SELECT = from usuarios  where nombreusuario = '$usuario' and constrasenia = '$password'";
)

//Verificar el total de columnas en la base de datos
if(mysql_num_rows($validar_infomracion) > 0){
    echo "Bienvenid@"
}else if($numrows == 0){
    echo "El usuario no coincide";
}
?>