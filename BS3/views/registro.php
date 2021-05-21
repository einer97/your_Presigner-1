<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YOUR PRESIGNER</title>
    <link rel="shortcut icon" href="LogoRosado.png">
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <h1 class="h4 text-gray-900 mb-4">BIENVENIDA</h1>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<body background="logoBlanco.png " body>

    <!-- Styles -->
    <style>
        html,
        body {
            color: #000000;
            font-family: Ink Free;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #000000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="http://localhost/ProyectoS/BS3/views/welcome.php">MENU PRINCIPAL</a>
            </div>

            <body>
                <form action="registrologin.php" method="post" ; <h1 class="animate__animated animate__backInLeft">
                    </h1>
                   <p>USUARIO <input type="text"  pattern=["A-Za-z0-9_-"]{1,15} placeholder="INGRESE DATOS" name="usuario" </p>
                   <p>PASSWORD<input type="password" required pattern=["A-Za-z0-9_-"]{1,15} placeholder="INGRESE DATOS" name="password" </p>
                        <input type="submit" class="btn btn-primary btn-user btn-block" />
                        <div class="text-center">
                           <a class="small" href="recuperarContraseña.php">¿Olvidaste la contraseña?</a>
                        </div>
                        <div class="text-center">
                           <a class="small" href="registro.php">¿No tienes una cuenta?,     Ingresa aqui para crear una</a>
                        </div>    
                </form>
            </body>
        </div>
    </body>

</html>
