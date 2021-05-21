<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_administrador'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO administrador VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: administrador.php");
    
}else {
}
?>