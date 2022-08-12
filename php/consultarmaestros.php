<?php
//Acceder a la página de conexión
require "conexiónBD.php";
//indicar la consulta de la bd.
$Consultarmaestros = "SELECT * FROM maestros";
//Conectarse a la bd y ejecutar el select.
$result = $conexion->query($Consultarmaestros);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Consultar maestros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-12">
            <table class="table mt-5">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id_alumno</th>
                        <th scope="col">Nombre_alumno</th>
                        <th scope="col">Apellido_paterno</th>
                        <th scope="col">Apellido_materno</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo_Electronico</th>
                    </tr>
                </thead>
            </table>
            <tbody>
                <?php
                //Verificar que exista registros en la tabla alumnos
                if($result->num_rows>0){
                    //alumnos['1', 'nombre', 'apellido paterno', 'apellido materno', 'edad']
                    while($row = $result->fetch_assoc()){}
                }
                ?>
                <tr>
                    <td><?php echo $row['Matricula_Alumno'];?> </td>
                    <td><?php echo $row['Nombre_Alumno'];?> </td>
                    <td><?php echo $row['Apellido_paterno'];?> </td>
                    <td><?php echo $row['Apellido_materno'];?> </td>
                    <td><?php echo $row['Edad'];//edad = 20?> </td>
                    <td><?php echo $row['Telefono'];?> </td>
                    <td><?php echo $row['Correo_Elwctronico'];?> </td>
                    <td><a class="btn btn-info" href="ModificarAlumnos.php?Matricula_Alumno=<?php echo $row['Matricula_alumno'];?>"></a>&nbsp;
                    <a class="btn btn-danger" href="ModificarAlumnos.php?Matricula_Alumno=<?php echo $row['Matricula_alumno'];?>">Edit</a>
                    </td>
                    
                </tr>
            </tbody>
        </div>
    </div>
  </body>
</html>