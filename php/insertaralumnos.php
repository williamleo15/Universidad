<?php
//mandar llamar la página 
include "ConexiónBD.php";
//Mandar llamar intputs de la página alumnos.html
$nombrecompleto = $_POST['txt_nombre'];
$edad = $_POST['txt_edad'];
$email = $_POST['txt_correo'];
$telefono = $_POST['txt_telefono'];
//pregunta si los campos estan vacios
if (empty($_POST['txt_name'])&& empty($_POST['txt_apellidopaterno']) && empty($_POST['txt_apellidomaterno']) && empty($_POST['txt_edad']) && empty($_POST['txt_telefono']) && empty($_POST['txt_correo']))
//si los campos estan vacios
{
    echo "Hay campos vacios";
}

$insertaralumnos = "insert into alumnos (Nombre_alumno, Apellido_paterno, Apellido_materno, Edad, Telefono, Correo_Electronico) values ('$studentname', '$firstname', '$secondname', '$age', '$phonenumber', '$email')";

?>
