<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_paciente'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE paciente SET  correo='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_paciente='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>