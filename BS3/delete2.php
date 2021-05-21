<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM paciente  WHERE cod_paciente='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>