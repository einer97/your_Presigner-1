<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM doctor  WHERE cod_doctor='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: doctor.php");
    }
?>
