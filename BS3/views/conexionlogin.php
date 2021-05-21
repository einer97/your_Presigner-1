<?php
use PhpParser\Node\Stmt\Label; //gestor de la bases de datos

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto1"; //nombre de la base de datos

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("NO HAY CONEXION: ".mysqli_connect_error());
}
$nombre = $_POST["usuario"];
$pass = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);
if($nr ==1){
    header("location: http://localhost/ProyectoS/BS3/dashboard.html");
    

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
}
