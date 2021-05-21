<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/login1.css">
    <title>RECUPERAR CONTRASEÑA</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="css/login1.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> 
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿OLVIDASTE LA CONTRASEÑA?</h1>
                                        <h3 class="mb-4">Entendemos que es importante para ti, por eso
                                            ingresa tu usuario para ayudarte con la recuperacion de tu contraseña</h3>
                                    </div>
                                    <form class="user">
                                    <h1 class="animate__animated animate__backInLeft"></h1>
                                        <div class="form-group">
                                            <input type="usuario" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                required pattern=["A-Za-z0-9_-"]{1,15}
                                                placeholder="Ingresa tu usuario...">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block"/>
                                        <!-- FALTA HACER REDIRECCIONAMIENTO DE LOS BOTONES -->
                                        <!-- FALTA QUERY PARA MOSTRAR  O CAMBIAR LA CONTRASEÑA PARA CAMBIARLA -->
                                        <!-- FALTA CADENA DE CONEXION PARA INSERTAR Y MOSTRAR DATO -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="registro.php">¿No tienes una cuenta?,     Ingresa aqui para crear una</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">¿Ya tienes cuenta?,      Ingresa aqui para acceder</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
