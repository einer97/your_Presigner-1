<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_administrador'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE administrador SET  correo='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_administrador='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administrador.php");
    }
?>