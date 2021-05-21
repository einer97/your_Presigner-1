<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('basedatos.php');

$id=$_POST['id'];
$correo=$_POST['correo'];
$primnombre=$_POST['primernombre'];
$segunombre=$_POST['segundonombre'];

$consulta="INSERT INTO `registroadministrador` (`id`, `correo`, `primernombre`, `segundonombre`)
VALUES ('$id', '$correo', '$primnombre', '$segunombre')";


$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);





?>
