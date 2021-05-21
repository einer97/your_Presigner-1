<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('basedatos.php');

$usua=$_POST['usuario'];
$contras=$_POST['password'];

$consulta="INSERT INTO `login` (`usuario`, `password`)
VALUES ('$usua', '$contras')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);





?>
