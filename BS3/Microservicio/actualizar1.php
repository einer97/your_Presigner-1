<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM doctor WHERE cod_doctor='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body background="views\fondo3.jpg">
                <div class="container mt-5">
                    <form action="update1.php" method="POST">
                    
                                <input type="hidden" name="cod_doctor" value="<?php echo $row['cod_doctor']  ?>">
                                
                                <input type="text" class="form-control mb-3" required pattern=["A-Za-z0-9_-"]{1,15} name="correo" placeholder="ID" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" required pattern=["A-Za-z0-9_-"]{1,15} name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" required pattern=["A-Za-z0-9_-"]{1,15} name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>