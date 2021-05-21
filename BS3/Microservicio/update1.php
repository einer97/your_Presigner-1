<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_doctor'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE doctor SET  correo='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_doctor='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: doctor.php");
    }
?>