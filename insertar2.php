<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_paciente'];
$dni=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO paciente VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paciente.php");
    
}else {
}
?>