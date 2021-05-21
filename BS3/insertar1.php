<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_doctor'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO doctor VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: doctor.php");
    
}else {
}
?>