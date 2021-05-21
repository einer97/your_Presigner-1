<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM paciente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="LogoRosado.png">
        <link rel="stylesheet" href="css/login1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>YOUR PRESINGER</title>

    </head>
    <body background="views\fondo4.jpg">
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <!--<div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>-->

                        <div class="col-md-8">
                            <table class="table" center>
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>CEDULA</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_paciente']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><a href="actualizar2.php?id=<?php echo $row['cod_paciente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete2.php?id=<?php echo $row['cod_paciente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                                <th><a href="dashboardPaciente.html" class="btn btn-primary btn-user btn-block">INICIO</a></th>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>