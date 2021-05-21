<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM administrador  WHERE cod_administrador='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administrador.php");
    }
?>
