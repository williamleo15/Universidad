<?php

require "ConexiónBD.php";

//Obtener el id de la tabla alumnos con el metodo get.
$student_id = $_GET['matricula_alumno'];

//Eliminar la informacion con la instruccion DELETE.
$eliminaralumno = "delete FROM alumnos where matricula_Alumno = '$student_id'";

//Guardar la conexion de la base de datos y eliminar el registro.
$resultado = $conexion->query($eliminaralumno);

//Verificar si se elimino correctamente el registro.
if($resultado == true){
    header ("Location: ../php/consultarAlumnos.php");
}else{
    echo "Error" . $eliminaralumno . "<br>" . $conexion->error;
}
?>