<!DOCTYPE html>
<html lang="es";
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=decive-with, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="LogoRosado.png">
    <link rel="stylesheet" href="css/login1.css">
<title>YOUR PRESINGER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <h1 class="h4 text-gray-900 mb-4">INICIA SESION</h1>
<body>
    <form action="conexionlogin.php" method="post";
    <h1 class="animate__animated animate__backInLeft"></h1>
    <p>USUARIO <input type="text" required pattern=["A-Za-z0-9_-"]{1,15}
    placeholder="INGRESE SU USUARIO" name="usuario" </p>
    <p>CONTRASEÑA <input type="password" required pattern=["A-Za-z0-9_-"]{1,15}
    placeholder="INGRESE SU CONTRASEÑA" name="password" </p>
    <input type="submit" class="btn btn-primary btn-user btn-block" />
    <div class="text-center">
        <a class="small" href="recuperarContraseña.php">¿Olvidaste la contraseña?</a>
    </div>
    <div class="text-center">
        <a class="small" href="registro.php">¿No tienes una cuenta?,     Ingresa aqui para crear una</a>
    </div>
    </form>
</body>
</head>
</html>


