<?php
require "ConexiónBD.php";

session_start();

$matricula = $_POST['txt_matricula'];
$pass = $_POST['txt_contraseña'];
$_SESSION['txt_matricula']= $matricula;

$consulta="SELECT*FROM administrativos where txt_matricula='$matricula' and txt_contraseña='$pass'";
$result=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($result);

if($filas){
    header("location: ../HTML/index.html");
}else{
    echo "<p>Error</p>"
}
mysqli_free_result($result);
mysqli_close()
?>