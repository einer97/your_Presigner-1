<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YOUR PRESIGNER</title>
        <link rel="shortcut icon" href="logoRosado.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <body background="Fondo.png "body>

        <!-- Styles -->
        <style>
            html, body {
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

            .links > a {
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
                    <a href="http://localhost/ProyectoS/BS3/views/login.php">INICIAR SESION</a>

                    <a href="http://localhost/ProyectoS/BS3/views/registro.php">REGISTRARSE</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    ¡BIENVENIDOS A YOUR PRESIGNER!
                </div>
                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>
